<?php


namespace App\Models;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Static_;

class post
{
    public static function all  ()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel 1',
                'title' => 'Judul artikel 1',
                'author' => 'Galuh wikri',
                'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
             Lorem Ipsum has been the industry,s standard dummy text ever since the 1500s, when an
             unknown printer took a galley of type and scrambled it to make a type specimen book.
             It has survived not only five centuries, but also the leap into electronic typesetting,
             remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
             sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
             Aldus PageMaker including versions of Lorem Ipsum'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel 2',
                'title' => 'Judul artikel 2',
                'author' => 'Galuh wikri',
                'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
             Lorem Ipsum has been the industry,s standard dummy text ever since the 1500s, when an
             unknown printer took a galley of type and scrambled it to make a type specimen book.
             It has survived not only five centuries, but also the leap into electronic typesetting,
             remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
             sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
             Aldus PageMaker including versions of Lorem Ipsum'
            ]
        ];
    }
    public static function find($slug) : array
    {
        $post = Arr::first(Static::all(), fn($post) => $post['slug'] === $slug);

        if ( ! $post) {
            abort(404, 'Post not found');
        }
        return $post;
    }
}
