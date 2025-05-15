
const submenuItems = [
    { href: "/ibu", text: "Ibu" },
    { href: "/keluarga", text: "Keluarga" },
    { href: "/kesehatan1", text: "Kesehatan 1" },
    { href: "/kesehatan2", text: "Kesehatan 2" },
    { href: "/kesehatan-bersalin", text: "Kesehatan Bersalin" },
    { href: "/kesehatan-nifas", text: "Kesehatan Nifas" },
    { href: "/kontrol-ttd", text: "Kontrol TTD" },
    { href: "/minum-ttd", text: "Minum TTD" },
    { href: "/menyambut-persalinan", text: "Menyambut Persalinan" },
    { href: "/amanat-penolong-persalinan", text: "Amanat Penolong Persalinan" },
    { href: "/amanat-kendaraan", text: "Amanat Kendaraan" },
    { href: "/amanat-darah", text: "Amanat Darah" },
    { href: "/evaluasi-kesehatan-bumil", text: "Evaluasi Kesehatan Bumil" },
    { href: "/kondisi-kesehatan-bumil", text: "Kondisi Kesehatan Bumil" },
    { href: "/imunisasi-t", text: "Imunisasi T" },
    { href: "/riwayat-kesehatan-bumil", text: "Riwayat Kesehatan Bumil" },
    { href: "/riwayat-perilaku-berisiko", text: "Riwayat Perilaku Berisiko" },
    { href: "/riwayat-kehamilan", text: "Riwayat Kehamilan" },
    { href: "/riwayat-penyakit-keluarga", text: "Riwayat Penyakit Keluarga" },
    { href: "/pemeriksaan-khusus", text: "Pemeriksaan Khusus" },
    { href: "/pemeriksaan-trimester1", text: "Pemeriksaan Trimester 1" },
    { href: "/pemeriksaan-fisik-tri1", text: "Pemeriksaan Fisik Trimester 1" },
    { href: "/usg-tri1", text: "USG Trimester 1" },
    { href: "/pemeriksaan-laboratorium-tri1", text: "Pemeriksaan Laboratorium Trimester 1" },
    { href: "/evaluasi-kehamilan", text: "Evaluasi Kehamilan" },
    { href: "/berat-badan-bumil", text: "Berat Badan Bumil" },
    { href: "/skrining-preeklampsia", text: "Skrining Preeklampsia" },
    { href: "/preeklampsia-anamnesis", text: "Preeklampsia Anamnesis" },
    { href: "/preeklampsia-fisik", text: "Preeklampsia Fisik" },
    { href: "/pemeriksaan-trimester3", text: "Pemeriksaan Trimester 3" },
    { href: "/pemeriksaan-fisik-tri3", text: "Pemeriksaan Fisik Trimester 3" },
    { href: "/usg-tri3", text: "USG Trimester 3" },
    { href: "/pemeriksaan-laboratorium-tri3", text: "Pemeriksaan Laboratorium Trimester 3" },
    { href: "/ringkasan-kesehatan", text: "Ringkasan Kesehatan" },
    { href: "/ibu-bersalin", text: "Ibu Bersalin" },
    { href: "/bayi-lahir", text: "Bayi Lahir" },
    { href: "/ringkasan-nifas", text: "Ringkasan Nifas" },
    { href: "/ringkasan-kesimpulan-nifas", text: "Ringkasan Kesimpulan Nifas" },
    { href: "/rujukan", text: "Rujukan" }
];

document.addEventListener("DOMContentLoaded", function () {
    const submenuList = document.getElementById("submenu-list1");

    submenuItems.forEach((item, index) => {
        const li = document.createElement("li");
        li.className = "mb-2";
        li.style.setProperty("--delay", index + 1);

        const a = document.createElement("a");
        a.href = item.href;
        a.textContent = item.text;

        li.appendChild(a);
        submenuList.appendChild(li);
    });
});
