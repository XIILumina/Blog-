<?php
// Model.php
require "Database.php";

abstract class Model {
    protected static $db;

    public static function init() {
        if (!self::$db) {
            self::$db = new Database();
        }
    }

    abstract protected static function getTableName(): string;

    public static function all() {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName();
        return self::$db->query($sql)->fetchAll();
    }

    public static function find($id) {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName() . " WHERE id = ?";
        return self::$db->query($sql, [$id])->fetch();
    }

    public static function save($data) {
        self::init();
        $sql = "INSERT INTO " . static::getTableName() . " (content) VALUES (?)";
        self::$db->query($sql, [$data['content']]);
    }

    public static function update($id, $data) {
        self::init();
        $sql = "UPDATE " . static::getTableName() . " SET content = ? WHERE id = ?";
        self::$db->query($sql, [$data['content'], $id]);
    }

    public static function delete($id) {
        self::init();
        $sql = "DELETE FROM " . static::getTableName() . " WHERE id = ?";
        self::$db->query($sql, [$id]);
    }
}