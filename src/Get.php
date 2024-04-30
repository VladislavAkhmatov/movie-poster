<?php


namespace App;


class Get extends Config
{
    public static function findFilmById($id){
        $film = \R::findOne('film', 'id = :id', [':id' => $id]);
        return $film;
    }
    public static function findFilmsByDate($date){
        $film = \R::findAll('film', 'show_date = :date', [':date' => $date]);
        return $film;
    }
}