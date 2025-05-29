const submenuItems3 = [
    { href: "/grafik-berat-badan-umur-laki", text: "Grafik Berat Badan Umur Laki" },
    { href: "/grafik-tinggi-badan-umur-laki", text: "Grafik Tinggi Badan Umur Laki" },
    { href: "/grafik-bb-tb-laki", text: "Grafik Berat Badan Tinggi Badan Laki" },
    { href: "/grafik-lingkar-laki", text: "Grafik Lingkar Laki" },
    { href: "/grafik-bb-u-pr", text: "Grafik Berat Badan Umur Perempuan" },
    { href: "/grafik-tb-u-pr", text: "Grafik Tinggi Badan Umur Perempuan" },
    { href: "/grafik-bb-tb-pr", text: "Grafik Berat Badan Tinggi Badan Perempuan" },
    { href: "/grafik-lingkar-pr", text: "Grafik Lingkar Badan Perempuan" },
    { href: "/grafik-imt-laki", text: "Grafik IMT Laki" },
    { href: "/grafik-imt-pr", text: "Grafik IMT Perempuan" },
];

document.addEventListener("DOMContentLoaded", function () {
    const submenuList3 = document.getElementById("submenu-list3");

    submenuItems3.forEach((item, index) => {
        const li = document.createElement("li");
        li.className = "mb-2";
        li.style.setProperty("--delay", index + 1);

        const a = document.createElement("a");
        a.href = item.href;
        a.textContent = item.text;

        li.appendChild(a);
        submenuList3.appendChild(li);
    });
});
