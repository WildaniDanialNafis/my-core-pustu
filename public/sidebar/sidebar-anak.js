const submenuItems2 = [
    { href: "/anak", text: "Anak" },
    { href: "/wali", text: "Wali" },
    { href: "/bayi-baru-lahir", text: "Bayi Baru Lahir" },
    { href: "/bayi", text: "Bayi" },
    { href: "/anak-balita", text: "Anak Balita" },
    { href: "/keterangan-lahir", text: "Keterangan Lahir" },
    { href: "/riwayat-kelahiran", text: "Riwayat Kelahiran" },
    { href: "/pelayanan-kesehatan-neonatus", text: "Pelayanan Kesehatan Neonatus" },
    { href: "/kn0", text: "Kesehatan Neonatus 0" },
    { href: "/kn1", text: "Kesehatan Neonatus 1" },
    { href: "/kn2", text: "Kesehatan Neonatus 2" },
    { href: "/kn3", text: "Kesehatan Neonatus 3" },
    { href: "/imunisasi", text: "Imunisasi" },
    { href: "/pemantauan-kia", text: "Pemantauan KIA" },
    { href: "/pelayanan-sdidtk", text: "Pelayanan SDIDTK" },
    { href: "/penyimpangan-pertumbuhan", text: "Penyimpangan Pertumbuhan" },
    { href: "/penyimpangan-perkembangan", text: "Penyimpangan Perkembangan" },
    { href: "/penyimpangan-emosional", text: "Penyimpangan Emosional" },
    { href: "/nasihat-anak", text: "Nasihat Anak" },
    { href: "/kapsul-anak", text: "Kapsul Anak" },
    { href: "/kms-perempuan", text: "KMS Anak Perempuan" },
    { href: "/data-kms-perempuan", text: "Data KMS Anak Perempuan" },
    { href: "/bb-u-perempuan", text: "Berat Badan Per Umur Anak Perempuan" },
    { href: "/tb-u-perempuan", text: "Tinggi Badan Per Umur Anak Perempuan" },
    { href: "/bb-tb-perempuan", text: "Berat Badan Per Tinggi Badan Anak Perempuan" },
    { href: "/lingkar-kepala-perempuan", text: "Lingkar Kepala Per Umur Anak Perempuan" },
    { href: "/kms-laki", text: "KMS Anak Laki" },
    { href: "/data-kms-laki", text: "Data KMS Anak Laki" },
    { href: "/bb-u-laki", text: "Berat Badan Per Umur Anak Laki" },
    { href: "/tb-u-laki", text: "Tinggi Badan Per Umur Anak Laki" },
    { href: "/bb-tb-laki", text: "Berat Badan Per Tinggi Badan Anak Laki" },
    { href: "/lingkar-kepala-laki", text: "Lingkar Kepala Per Umur Anak Laki" },
    { href: "/imt-perempuan", text: "IMT Perempuan" },
    { href: "/imt-laki", text: "IMT Laki" },
    { href: "/kesehatan-gigi", text: "Kesehatan Gigi" },
    { href: "/data-kesehatan-gigi", text: "Data Kesehatan Gigi" },
    { href: "/ringkasan-mtbs", text: "Ringkasan MTBS" },
    { href: "/ringkasan-pelayanan-dokter", text: "Ringkasan Pelayanan Dokter" },
    { href: "/rujukan-anak", text: "Rujukan Anak" }
];

document.addEventListener("DOMContentLoaded", function () {
    const submenuList2 = document.getElementById("submenu-list2");

    submenuItems2.forEach((item, index) => {
        const li = document.createElement("li");
        li.className = "mb-2";
        li.style.setProperty("--delay", index + 1);

        const a = document.createElement("a");
        a.href = item.href;
        a.textContent = item.text;

        li.appendChild(a);
        submenuList2.appendChild(li);
    });
});
