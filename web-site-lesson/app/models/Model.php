<?php

namespace App\Models;

abstract class Model
{
    protected string $table;

    protected array $attributes = [];

    protected function getTable() {
        return $this->table;
    }

    public function __get(string $name) {
        if (isset($this->attributes[$name])) {
            return $this->attributes[$name];
        }

        throw new RuntimeException("Property {$name} not found in class ".static::class);
    }

    public static function findAll() {
        $model = new static();
        $table = $model->getTable();
        $db = Application::getApp()->get('db')->getConnection();
        $stmt = $db->prepare("SELECT * FROM {$table}");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $models = [];
        foreach ($rows as $row) {
            $model = new static();
            foreach ($row as $k => $v) {
                $model->attributes[$k] = $v;
            }
            $models[] = $model;
        }

        return $models;
    }

    public static function findByPk($id):Model {
        $model = new static();
        $table = $model->getTable();
        $db = Application::getApp()->get('db')->getConnection();
        $stmt = $db->prepare("SELECT * FROM {$table} WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        foreach ($row as $k => $v) {
            $model->attributes[$k] = $v;
        }
        return $model;
    }

    public static function delete($id) {
     //   try{
        $model = new static();
        $table = $model->getTable();
        $db = Application::getApp()->get('db')->getConnection();
        $stmt = $db->prepare("DELETE FROM {$table} WHERE id = ?");
        $stmt->execute([$id]);
             
        // return 0;
        // }catch(Exception $e){
        //      echo $e->getMessage();
        //      return 1;
        // }
    }
}