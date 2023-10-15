<?php

# membuat class Animal
class Animal
{
    # property animals
    private $animals = [];

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->animals = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        foreach ($this->animals as $animal) {
            echo "-" . $animal . "<br>";
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        array_push($this->animals, $data);
        echo "Store - Menambahkan hewan baru ($data) <br>";
        $this->index();
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $data;
            echo "Update - Mengupdate hewan <br>";
            $this->index();
        }
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        if (isset($this->animals[$index])) {
            unset($this->animals[$index]);
            $this->animals = array_values($this->animals); // Mengatur ulang indeks array
            echo "Delete - Menghapus hewan <br>";
            $this->index();
        }
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(['Ayam', 'Ikan']);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

$animal->store('Burung');
echo "<br>";

$animal->update(0, 'Kucing Anggora');
echo "<br>";

$animal->destroy(1);
echo "<br>";
