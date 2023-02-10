<?php
class Database
{
    private $host; // holds the hostname for the database connection
    private $name; // holds the database name for the connection
    private $user; // holds the username for the database connection
    private $password; // holds the password for the database connection

    /**
     * Constructor method for the Database class
     *
     * @param string $host The hostname for the database connection
     * @param string $name The database name for the connection
     * @param string $user The username for the database connection
     * @param string $password The password for the database connection
     */
    public function __construct(string $host, string $name, string $user, string $password)
    {
        $this->host = $host;
        $this->name = $name;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Creates and returns a PDO object for the database connection
     *
     * @return PDO The PDO object for the database connection
     */
    public function getConnection(): PDO
    {
        $dsn = "mysql:host={$this->host};dbname={$this->name};charset=utf8"; // Data Source Name for the connection
        return new PDO($dsn, $this->user, $this->password); // returns a PDO object for the database connection
    }
}
