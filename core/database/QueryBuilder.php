<?php

class QueryBuilder
{
    /**
     * The PDO instance.
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select all records from a database table.
     * @param string $table
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare('select * from '.$table);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Get all user from database
     */
    public function getAllUser()
    {
        $statement = $this->pdo->prepare("
            SELECT users.id, users.name, COUNT(ads.id) as number_of_ads
            FROM users
            LEFT JOIN ads
            ON ads.user_id = users.id
            GROUP BY users.id;
            ");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS,'User');
    }

    /**
     * Get all ads from database
     */
    public function getAllAd()
    {
        $statement = $this->pdo->prepare("
            SELECT ads.id, ads.user_id, ads.title, users.name as 'owner'
            FROM ads
            JOIN users
            ON users.id = ads.user_id;
        ");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS,'Ad');
    }
}