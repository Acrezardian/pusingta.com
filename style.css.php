<?php
header("Content-type: text/css; charset: UTF-8");

echo <<<CSS
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background: #f4f4f4;
    color: #333;
    line-height: 1.5;
    overflow-x: hidden;
}   

/* Kontainer Overlay */
.wa-overlay-container {
    position: relative;
    display: inline-block;
}

.wa-overlay-container img {
    display: block;
    width: 100%;
    height: auto;
}

/* Kontainer Overlay */
.wa-overlay {
    position: fixed;
    bottom: 20px;
    right: 20px; 
    background-color: rgba(0, 0, 0, 0.5); /* Warna overlay dengan transparansi */
    padding: 10px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
    z-index: 1000; /* Pastikan overlay berada di atas elemen lainnya */
}

.wa-overlay img {
    width: 50px; /* Ukuran ikon WhatsApp */
    height: 50px;
}

/* Efek Hover */
.wa-overlay:hover {
    background-color: rgba(0, 0, 0, 0.7);
}


header {
    background: #6c5ce7;
    color: white;
    padding: 10px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    position: relative;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    width: 50px;
}

header h1 {
    font-size: 2rem;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: justify;
}

nav {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}

.nav-links {
    display: flex;
    justify-content: center;
}

.nav-links a {
    color: white;
    text-decoration: none;
    padding: 8px 10px;
    margin: 0 5px;
    font-size: 1rem;
    transition: background-color 0.3s ease;
    border-radius: 3px;
}

.nav-links a:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.menu-icon {
    display: none;
    font-size: 1.5rem;
    cursor: pointer;
}

@media (max-width: 768px) {
    .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 80px;
        left: 0;
        width: 100%;
        background-color: #6c5ce7;
        padding: 10px 0;
        text-align: center;
        z-index: 1000;
        transition: all 0.3s ease;
    }

    .nav-links.active {
        display: flex;
    }

    .nav-links a {
        font-size: 1.5rem;
    }

    .menu-icon {
        display: block;
        cursor: pointer;
        font-size: 1.8rem;
    }
}

section {
    padding: 40px;
    margin: 20px auto;
    max-width: 1200px;
    background: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    transition: transform 0.3s ease;
    text-align: justify; 
}

section:hover {
    transform: translateY(-5px);
}

.section-title {
    font-size: 2rem;
    margin-bottom: 20px;
    margin-top: 10px;
    color: #6c5ce7;
    text-transform: uppercase;
    letter-spacing: 1px;
}

#about:hover,
#services:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
}

.portfolio-item {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

#services {
    padding: 20px; /* Ubah padding menjadi lebih kecil */
    max-width: 1200px;
    background: white;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    transition: transform 0.3s ease;
    text-align: justify;
}
.service-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.service-icon {
    width: 80px;
    margin-right: 20px;
}

.service-icon img {
    width: 100%;
    border-radius: 50%;
    flex-shrink: 0; /* Tambahkan properti ini */
}

.service-details h3 {
    font-size: 1 rem;
    color: #6c5ce7;
    margin-bottom: 10px;
}

.service-details p {
    font-size: 1rem;
    color: #333;
    text-align: justify;
}

.project {
    background: #f1f2f6;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease;
}

.project img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
}

.project h3 {
    font-size: 1.5rem;
    color: #6c5ce7;
    margin-bottom: 10px;
}

.project p {
    font-size: 1rem;
    color: #333;
    text-align: justify; /* Teks di project rata kiri-kanan */
}

.project:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); /* Bayangan yang lebih menonjol saat hover */
    transition: transform 0.3s ease;

}

.contact-form button {
    padding: 12px 24px;
    background: #6c5ce7;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.contact-form button:hover {
    background-color: #4834d4;
}

/* CSS untuk Cara Kerja */
#how-it-works {
    background-color: #f9f9f9;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: grid;
    gap: 30px;
    grid-template-columns: repeat(2, 1fr); /* Menggunakan grid dengan dua kolom */
}

#how-it-works h2.section-title {
    font-size: 2rem;
    color: #6c5ce7;
    text-align: center;
    grid-column: 1 / -1;
    margin-bottom: 0px;
    margin-top: 0px;
}

.step {
    background: #f1f2f6;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease; /* Transisi untuk efek timbul */
    display: flex;
    align-items: flex-start;
    position: relative;
}

.step:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); /* Bayangan yang lebih menonjol saat hover */
    transition: transform 0.3s ease;

}

.step-details {
    flex: 1;
    margin-left: 20px; /* Mengatur margin kiri untuk step-details */
}

.step h3 {
    font-size: 1.2rem;
    color: #6c5ce7;
    margin-top: 0;
}

.step p {
    font-size: 1rem;
    color: #333;
    text-align: justify;
    line-height: 1.6;
    margin-bottom: 10px;
}

/* Media query untuk tampilan mobile */
@media (max-width: 768px) {
    #how-it-works {
        grid-template-columns: 1fr; /* Mengubah menjadi satu kolom pada layar kecil */
    }

    .step-details {
        margin-left: 0; /* Menghapus margin kiri pada layar kecil */
    }

    .step {
        flex-direction: column; /* Mengatur step menjadi kolom pada layar kecil */
        align-items: stretch; /* Mengatur agar item tidak menyebar pada layar kecil */
    }
}

/* Gaya tambahan untuk bagian harga */
#pricing {
    background-color: #f9f9f9;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

#pricing .section-title {
    font-size: 2rem;
    color: #6c5ce7;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

#pricing .price-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    justify-items: center;
}

#pricing .price-item {
    background-color: #f1f2f6;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Transisi untuk transformasi dan bayangan */
    width: 100%; /* Menggunakan lebar penuh untuk responsif */
    max-width: 250px; /* Batasan lebar maksimum untuk item harga */
    margin-bottom: 20px; /* Jarak antar item */
}

#pricing .price-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); /* Bayangan yang lebih menonjol saat hover */
}

#pricing .price-item h3 {
    color: #6c5ce7;
    font-size: 1.5em;
    margin-bottom: 10px;
}

#pricing .price-item .price {
    color: #333;
    font-size: 1.2em;
    font-weight: bold;
    margin: 20px 0;
}

#pricing .price-item ul {
    list-style: none;
    padding: 0;
    text-align: left;
}

#pricing .price-item ul li {
    margin: 10px 0;
    border: 2px solid #ddd;
    background: white;
    padding: 10px;
    border-radius: 10px;
    font-weight: 600;
}

@media (max-width: 992px) {
    #pricing .price-item {
        max-width: 100%; /* Menggunakan lebar penuh untuk ukuran layar yang lebih kecil */
    }
}

@media (max-width: 768px) {
    #pricing .price-item {
        width: calc(100% - 20px); /* Perhitungan lebar dengan margin */
    }
}

#testimonials {
    background-color: #f9f9f9;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.testimonial-container {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    gap: 30px;
    padding: 10px;
}

.testimonial-item {
    background: #f1f2f6;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    flex: 0 0 300px;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

.testimonial-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); /* Bayangan yang lebih menonjol saat hover */
}

.testimonial-item p {
    font-size: 1rem;
    color: #333;
    line-height: 1.8;
    font-style: italic;
}

.testimonial-item h3 {
    font-size: 1.5rem;
    color: #4834d4;
    margin-bottom: 10px;
}

.scroll-button {
    background-color: #6c5ce7;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px;
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    transition: background-color 0.3s ease;
    z-index: 100;
}

#scroll-left {
    left: 10px;
}

#scroll-right {
    right: 10px;
}

.scroll-button:hover {
    background-color: #4834d4;
}

.scroll-button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

@media (max-width: 768px) {
    .menu-icon {
        display: block;
    }

    .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 70px;
        right: 0;
        background: #6c5ce7;
        width: 100%;
        text-align: center;
    }

    .nav-links.active {
        display: flex;
    }

    .nav-links a {
        margin: 10px 0;
        font-size: 1.5rem;
    }

    header h1 {
        font-size: 1.8rem;
        margin-left: 0;
    }

    section {
        padding: 30px 10px;
    }

    .portfolio-item {
        grid-template-columns: 1fr;
    }

    .project {
        padding: 15px;
    }
}

@media (max-width: 480px) {
    header {
        padding: 15px;
    }

    header h1 {
        font-size: 1.5rem;
    }

    .nav-links a {
        font-size: 0.9rem;
    }

    section {
        padding: 20px;
        margin: 20px 10px;
    }
}

.button {
    display: inline-block;
    background-color: #6c5ce7;
    color: white;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    cursor: pointer;
    font-size: 1rem;
    border: none;
    outline: none;
}

.button:hover {
    background-color: #4834d4;
    padding: 15px 30px;
    font-size: 1.1rem;
}

.flex-item {
    text-align: center;
}

.grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

.grid-item {
    padding: 20px;
    background: white;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
}

@media (max-width: 768px) {
    .grid-container {
        grid-template-columns: 1fr;
    }

    #how-it-works {
        padding: 30px;
    }

    .step {
        flex-direction: column;
        align-items: flex-start;
    }

    .step-number {
        position: static;
        margin-bottom: 10px;
        transform: none; /* Reset transform untuk tampilan responsif */
        transition: none; /* Reset transisi untuk tampilan responsif */
    }

    .step-line {
        height: auto;
        width: 2px;
        margin: 10px 0;
    }

}

/* CSS untuk FAQ */
#faq {
    background-color: #f9f9f9;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    text-align: left; /* Ubah menjadi left untuk konten FAQ */
}

#faq .section-title {
    font-size: 2rem;
    color: #6c5ce7;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center; /* Tengahkan judul */
}

#faq .faq-item {
    margin-bottom: 20px;
}

#faq .faq-question {
    font-weight: bold;
    cursor: pointer;
    padding: 10px;
    background-color: #f1f2f6;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    margin-bottom: 10px;
    transition: background-color 0.3s ease;
}

#faq .faq-question:hover {
    background-color: #ccc;
}

#faq .faq-answer {
    display: none;
    margin-top: 10px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #f1f1f1; /* Warna latar belakang untuk jawaban */
    border-radius: 5px;
}

#faq .faq-answer p {
    font-size: 1rem;
    color: #333;
    line-height: 1.6;
}

#faq .faq-item.active .faq-answer {
    display: block;
}


/* Footer Styles */
footer {
    background: #6c5ce7;
    color: white;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: 20px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
}
CSS;
?>
