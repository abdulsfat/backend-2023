// TODO 3: Import data students dari folder data/students.js
const { request } = require("express");
const students = require("../data/students");

// Membuat Class StudentController
class StudentController {
  index(req, res) {
    // TODO 4: Tampilkan data students
    const data = {
      message: "Menampilkan data student",
      data: students,
    };

    res.json(data);
  }

  store(req, res) {
    // TODO 5: Tambahkan data students
    students.push(nama);

    const data = {
      message: `Menambahkan data students : ${nama}`,
      data: students,
    };

    res.json(data);
  }

  update(req, res) {
    const { id } = req.params;
    const { nama } = req.body;

    // TODO 6: Update data students

    students[id] = nama;

    const data = {
      message: `Menambahkan data students id ${id}, nama ${nama}`,
      data: students,
    };

    res.json(data);
  }

  destroy(req, res) {
    const { id } = req.params;

    // TODO 7: Hapus data students
    const data = {
      message: `Menghapus data students${id}`,
      data: students,
    };

    res.json(data);
  }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;
