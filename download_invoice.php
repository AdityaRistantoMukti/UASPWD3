<?php
// Mulai sesi jika belum dimulai
include 'koneksi.php';
session_start();

// Mengatur header untuk mengunduh file dengan nama "invoice.pdf"
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename=invoice.pdf");

// Membuat invoice PDF menggunakan library FPDF atau TCPDF
require('fpdf.php'); // Atau ganti dengan library PDF lainnya yang Anda gunakan

// Ambil data dari sesi
$nama = $_SESSION['nama'];
$bayar = $_SESSION['bayar'];
$pilih = $_SESSION['pilih'];

// Membuat objek PDF
$pdf = new FPDF();
$pdf->AddPage();

// Menambahkan isi ke PDF
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Invoice Pembayaran',0,1,'C');
$pdf->Cell(0,10,'---------------------------------------',0,1,'C');
$pdf->Cell(0,10,'Nama: ' . $nama,0,1);
$pdf->Cell(0,10,'Total Bayar: ' . $bayar,0,1);
$pdf->Cell(0,10,'Pilihan: ' . $pilih,0,1);

// Output PDF
$pdf->Output();
?>