const submenuItems3 = [
    { href: "/grafik/grafik-bb-u-lk", text: "Grafik Berat Badan Umur Laki" },
    { href: "/grafik/grafik-tb-u-lk", text: "Grafik Tinggi Badan Umur Laki" },
    { href: "/grafik/grafik-bb-tb-lk", text: "Grafik Berat Badan Tinggi Badan Laki" },
    { href: "/grafik/grafik-lingkar-lk", text: "Grafik Lingkar Laki" },
    { href: "/grafik/grafik-bb-u-pr", text: "Grafik Berat Badan Umur Perempuan" },
    { href: "/grafik/grafik-tb-u-pr", text: "Grafik Tinggi Badan Umur Perempuan" },
    { href: "/grafik/grafik-bb-tb-pr", text: "Grafik Berat Badan Tinggi Badan Perempuan" },
    { href: "/grafik/grafik-lingkar-pr", text: "Grafik Lingkar Badan Perempuan" },
    { href: "/grafik/grafik-imt-lk", text: "Grafik IMT Laki" },
    { href: "/grafik/grafik-imt-pr", text: "Grafik IMT Perempuan" },
];

document.addEventListener("DOMContentLoaded", async function () {
    const submenuList3 = document.getElementById("submenu-list3");

    for (let [index, item] of submenuItems3.entries()) {
        await addSubmenuItem(submenuList3, item, index);
    }
});

async function addSubmenuItem(container, item, index) {
    const li = document.createElement("li");
    li.className = "mb-2";
    li.style.setProperty("--delay", index + 1);

    const a = document.createElement("a");
    a.href = item.href;
    a.textContent = item.text;

    li.appendChild(a);
    container.appendChild(li);
}
