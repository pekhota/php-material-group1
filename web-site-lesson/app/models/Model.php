<?php
declare(strict_types=1);

abstract class Model
{
    protected string $table;

    protected array $attributes = [];

    protected function getTable(): string
    {
        return $this->table;
    }

    /**
     * @param $table
     * @param $column
     * @param $param
     * @param Model $model
     * @return Model
     */
    public static function multiplyGet($table, $column, $param, Model $model): Model
    {
        $db = Application::getApp()->get('db')->getConnection();
        $stmt = $db->prepare("SELECT * FROM {$table} WHERE {$column} = ?");
        $stmt->execute([$param]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            foreach ($row as $k => $v) {
                $model->attributes[$k] = $v;
            }
        }
        return $model;
    }

    public function __get(string $name)
    {
        if (isset($this->attributes[$name])) {
            return $this->attributes[$name];
        }

        throw new RuntimeException("Property {$name} not found in class " . static::class);
    }

    public static function findAll(string $statement = null): array
    {
        $model = new static();
        $table = $model->getTable();

        $db = Application::getApp()->get('db')->getConnection();

        if (is_null($statement)) {
            $stmt = $db->prepare("SELECT * FROM {$table}");
        } else {
            $stmt = $db->prepare($statement);
        }

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

    public static function findByPk($id): array
    {
        $model = new static();
        $table = $model->getTable();
        $db = Application::getApp()->get('db')->getConnection();
        $stmt = $db->prepare("SELECT * FROM {$table} WHERE id = ?");
        $stmt->execute([$id]);
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);

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


    public static function deleteByPk($id, $table)
    {
        $db = Application::getApp()->get('db')->getConnection();
        $stmt = $db->prepare("DELETE FROM {$table} WHERE id = ?");
        $stmt->execute([$id]);

    }

    public static function findByColumn($column, $param, $model): Model
    {
        $table = $model->getTable();
        return self::multiplyGet($table, $column, $param, $model);
    }

    public static function findByTableAndColumn($table, $column, $param, $model): Model
    {
        return self::multiplyGet($table, $column, $param, $model);
    }


    public function isSetAttributes(): bool
    {
        return !empty($this->attributes);
    }
}