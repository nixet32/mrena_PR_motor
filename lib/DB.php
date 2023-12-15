<?php

namespace PO\Lib;

class DB
{
    private $host = "localhost";
    private $port = 3306;
    private $username = "root";
    private $password = "";
    private $dbName = "motor";

    private \PDO $connection;

    public function __construct(
        string $host = "",
        int $port = 3306,
        string $username = "",
        string $password = "",
        string $dbName = ""
    )
    {
        if(!empty($host)) {
            $this->host = $host;
        }

        if(!empty($port)) {
            $this->port = $port;
        }

        if(!empty($username)) {
            $this->username = $username;
        }

        if(!empty($password)) {
            $this->password = $password;
        }

        if(!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {
            $this->connection = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function insertMenuRecord(string $pageName, string $url): bool
    {
        $sql = "INSERT INTO menu(page_name, url) VALUE ('" . $pageName . "', '" . $url . "')";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function getMenuItems(): array
    {
        $sql = "SELECT page_name, url FROM menu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $finalMenu = [];

        foreach ($data as $menuItem) {
            $finalMenu[$menuItem['page_name']] = $menuItem['url'];
        }

        return $finalMenu;
    }

    public function getMenu(): array
    {
        $sql = "SELECT * FROM menu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function getMenuItem(int $id): array
    {
        $sql = "SELECT * FROM menu WHERE id = ".$id;
        $query = $this->connection->query($sql);
        $data = $query->fetch(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function deleteMenuItem(int $id): bool
    {
        $sql = "DELETE FROM menu WHERE id = ".$id;
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function updateMenuItem(int $id, string $pageName = "", string $url = ""): bool
    {
        $sql = "UPDATE menu SET ";

        if(!empty($pageName)) {
            $sql .= " page_name = '" . $pageName . "'";
        }

        if(!empty($url)) {
            $sql .= ", url = '" . $url . "'";
        }

        $sql .= " WHERE id = ". $id;

        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }
    public function getSliderItems(): array
    {
        $sql = "SELECT title, subtitle, description FROM slider";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $sliderItems = [];

        foreach ($data as $sliderItem) {
            $sliderItems[] = [
                'title' => $sliderItem['title'],
                'subtitle' => $sliderItem['subtitle'],
                'description' => $sliderItem['description'],
            ];
        }

        return $sliderItems;
    }

    public function getRandomSliderItem(): array{
        $sliderItems = $this->getSliderItems();

        $randomIndex = array_rand($sliderItems, 1);

        $randomSlider = $sliderItems[$randomIndex];

    return $randomSlider;
    }

    public function getNextSliderItem($currentSlider): array
{
    $sliderItems = $this->getSliderItems();
    $currentIndex = array_search($currentSlider, $sliderItems);

    $nextIndex = ($currentIndex + 1) % count($sliderItems);

    $nextSlider = $sliderItems[$nextIndex];

    return $nextSlider;
}
public function getCategories(): array
{
    $sql = "SELECT id, name FROM category";
    $query = $this->connection->query($sql);
    $data = $query->fetchAll(\PDO::FETCH_ASSOC);
    $categories = [];

    foreach ($data as $category) {
        $categories[] = ['id' => $category['id'], 'name' => $category['name']];
    }

    return $categories;
}
    public function addCategory(string $name): bool
    {
        $sql = "INSERT INTO category(name) VALUE ('" . $name . "')";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }
    public function updateCategory(int $id, string $catName = ""): bool
    {
        $sql = "UPDATE category SET ";

        if(!empty($catName)) {
            $sql .= " name = '" . $catName . "'";
        }

        $sql .= " WHERE id = ". $id;

        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

        public function deleteCategory(int $id): bool
    {
        $sql = "DELETE FROM category WHERE id = ".$id;
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }
    public function addGallery(string $fileTitle, string $imgName): bool{
    $sql = "INSERT INTO gallery(fileTitle, imgName) VALUES (:fileTitle, :imgName)";
    $stmt = $this->connection->prepare($sql);
    $stmt->bindParam(':fileTitle', $fileTitle);
    $stmt->bindParam(':imgName', $imgName);

    return $stmt->execute();
    }

    public function getGallery(): array{
    $sql = "SELECT id, fileTitle, imgName FROM gallery";
    $query = $this->connection->query($sql);
    $data = $query->fetchAll(\PDO::FETCH_ASSOC);
    $gallery = [];

    foreach ($data as $item) {
        $gallery[] = [
            'id' => $item['id'],
            'fileTitle' => $item['fileTitle'],
            'imgName' => $item['imgName'],
        ];
    }
    return $gallery;
}
        public function deleteGallery(int $id): bool
    {
        $sql = "DELETE FROM gallery WHERE id = ".$id;
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

public function getCustomerService(): array {
    $sql = "SELECT id, title, description FROM customer_service";
    $query = $this->connection->query($sql);
    $data = $query->fetchAll(\PDO::FETCH_ASSOC);
    $cService = [];

    foreach ($data as $service) {
        $cService[] = ['id' => $service['id'], 'title' => $service['title'], 'description' => $service['description']];
    }

    return $cService;
}
public function updateService(int $id, string $title = "", string $description = ""): bool {
    $sql = "UPDATE customer_service SET ";

    if (!empty($title)) {
        $sql .= "title = '" . $title . "'";
    }

    if (!empty($description)) {
        $sql .= !empty($title) ? ", " : "";
        $sql .= "description = '" . $description . "'";
    }

    $sql .= " WHERE id = " . $id;

    $stmt = $this->connection->prepare($sql);
    return $stmt->execute();
}
public function getServiceDetails(): array {
    $sql = "SELECT id, title, description FROM customer_service_details";
    $query = $this->connection->query($sql);
    $data = $query->fetchAll(\PDO::FETCH_ASSOC);
    $cServiceD = [];

    foreach ($data as $service) {
        $cServiceD[] = ['id' => $service['id'], 'title' => $service['title'], 'description' => $service['description']];
    }
    return $cServiceD;
}
public function updateServiceDetail(int $id, string $title = "", string $description = ""): bool {
    $sql = "UPDATE customer_service_details SET ";

    if (!empty($title)) {
        $sql .= "title = '" . $title . "'";
    }

    if (!empty($description)) {
        $sql .= !empty($title) ? ", " : "";
        $sql .= "description = '" . $description . "'";
    }

    $sql .= " WHERE id = " . $id;

    $stmt = $this->connection->prepare($sql);
    return $stmt->execute();
}


}