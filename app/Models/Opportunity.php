<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;

    protected $with = ['client', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query->where(fn($query) =>
        $query->where('tender_no', 'like', '%' . $search . '%')
            ->orWhere('tender_title', 'like', '%' . $search . '%')
        )
        );

        $query->when($filters['client'] ?? false, fn($query, $client) =>
        $query->whereHas('client', fn ($query) =>
        $query->where('slug', $client))
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
        $query->whereHas('author', fn ($query) =>
        $query->where('username', $author)
        )
        );
    }

    public function getRouteKeyName()
    {
        return 'tender_title';
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

