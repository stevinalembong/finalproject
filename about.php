<?php include 'includes/header.php'; ?>

<main id="about-page">
    <section class="about-section">
    <div class="profile-picture">
    <img src="assets/webcam-toy-photo122.jpg" alt="foto vina" align="right" height="500">
        </div>
        <h2>About</h2>
        <p>This website was developed by Stevina Yohana Leonora Lembong.</p>
        <p>A 19-year-old girl and one of the students pursuing her studies at Sam Ratulangi University, majoring in Electrical Engineering, with a focus on Informatics. She loves listening to music and reading books.</p>
        <p>This website is created to fulfill the Final Project of the Web Programming course TIK2032D.</p>
    </section>
</main>

<style>

    /* Profile picture styling */
.profile-picture {
    text-align: center;
    margin-bottom: 20px;
}

.profile-picture img {
    width: 300px; /* Sesuaikan ukuran foto profil sesuai kebutuhan */
    height: auto;
    border-radius: 50%; /* Agar foto profil menjadi lingkaran */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
}

    /* Reset default styles */
body, h2, p {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



/* Main content styling specific to about page */
#about-page {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 160px); /* Adjust height according to header and footer height */
    padding: 40px 20px;
}

/* About section styling */
.about-section {
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 40px;
    max-width: 800px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

.about-section h2 {
    font-size: 2.5em;
    color: #35424a;
    margin-bottom: 20px;
}

.about-section p {
    font-size: 1.2em;
    line-height: 1.6;
    margin-bottom: 20px;
    color: #666;
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive design */
@media (max-width: 600px) {
    .about-section {
        padding: 20px;
    }

    .about-section h2 {
        font-size: 2em;
    }

    .about-section p {
        font-size: 1em;
    }
}

</style>

<?php include 'includes/footer.php'; ?>
