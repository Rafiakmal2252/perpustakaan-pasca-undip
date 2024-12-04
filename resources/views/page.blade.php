<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perputakaan Sekolah Pascasarjana UNDIP</title>   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class=" bg-background max-h-full">
    <div id="progress-bar" class="fixed z-20 top-0 left-0 h-[3px] bg-green-300 transition-all"></div>

    {{-- Header --}}
    <header>
        <div class="flex py-2 border-b-4 border-black">
        <img src="/images/logo-perpus.png" class="h-12 ml-3 lg:h-20">
    </header>
        
    {{-- Landing Section --}}
    <section class="relative mt-4 lg:mx-5 overflow-hidden">
        <div class="animate-slideInFromLeft bg-[#F4F6F5]/60 z-10 font-medium rounded py-4 px-2 text-xs w-32 ml-1 mt-8 shadow-lg absolute lg:font-bold lg:text-4xl lg:w-[430px] lg:px-11 lg:py-20 lg:bottom-20 lg:shadow-2xl">Selamat Datang di Perpustakaan Pascasarjana UNDIP</div>
        <img src="/images/gambar-perpus.jpg" class="animate-slideInFromLeft ml-10 h-36 place-items-center rounded lg:h-[510px] lg:place-self-end">
    </section>

    {{-- About Us Section --}}
    <section class="shadow-2xl  py-5 mt-16 flex font-poppins flex-col mx-4 bg-isi/60 rounded-md lg:mx-20 lg:py-10 "> 
        <div class="mx-2 lg:flex lg:items-center lg:space-x-20 lg:mx-14">
            <img src="/images/about-us.jpg" class="h-24 float-right ml-2 mt-2 rounded-md lg:h-60 lg:float-none lg:ml-0 lg:mt-0">
            <h2 class="font-bold text-xl mx-auto ml-1 text-background lg:font-bold lg:text-3xl">About Us
                <p class="text-xs font-semibold mt-3 text-black text-justify lg:text-base lg:font-semibold lg:mt-2 lg:text-black lg:text-left">Perpustakaan Pascasarjana Universitas Diponegoro merupakan salah satu fasilitas yang dirancang untuk mendukung kebutuhan akademik mahasiswa pascasarjana. Perpustakaan ini menyediakan berbagai koleksi literatur ilmiah yang mencakup 6 program studi yaitu Magister & Doktor Ilmu Lingkungan, Magister & Doktor Sistem Informasi, dan Magister Energi.</p>
            </h2>
        </div>
        <div class="mx-2 mt-14 lg:grid lg:grid-cols-2 lg:mt-20 lg:mx-10">
            <img src="/images/pascasarjana-undip.png" alt="Pascasarjana UNDIP" class="rounded-md h-32 mx-auto lg:hidden">
            <div class=" font-bold mt-4 inline-block text-base text-background">
                <h2 class="ml-1 lg:font-bold lg:text-2xl">Visi Sekolah Pascasarjana UNDIP:</h2>
                <p class="text-xs leading-5 text-justify font-bold mt-1 text-black lg:text-base lg:font-bold lg:mt-3 lg:mb-11">"Menjadi Sekolah Pascasarjana bertaraf internasional yang unggul dan terkemuka dengan mengintegrasikan bidang keilmuan multidisiplin."</p>
                <h2 class="font-bold text-lg mt-5 text-background lg:font-bold lg:text-2xl">Misi Sekolah Pascasarjana UNDIP:</h2>
                <ul class="text-xs font-medium mt-3 text-black space-y-2 list-disc list-inside lg:text-base lg:font-medium">
                    <li>Menyelenggarakan pendidikan pascasarjana multidisiplin berkualitas yang menghasilkan lulusan unggul, kompetitif, dan berkontribusi pada pengembangan ilmu pengetahuan, teknologi, dan seni.</li>
                    <li>Meningkatkan penelitian dan publikasi berbasis multidisiplin yang mengedepankan budaya dan sumber daya lokal.</li>
                    <li>Mengembangkan pengabdian kepada masyarakat melalui penerapan ilmu pengetahuan, teknologi, dan seni berbasis pendekatan multidisiplin.</li>
                    <li>Mengelola pendidikan pascasarjana dengan profesionalitas, akuntabilitas, tata kelola yang baik, dan kemandirian berkelanjutan.</li>
                </ul>
            </div>
            <img src="/images/pascasarjana-undip.png" alt="Pascasarjana UNDIP" class="hidden rounded-md my-auto ml-7 lg:block">
        </div>
    </section>

    {{-- Utility Section --}}
    <section class="shadow-2xl font-poppins bg-isi/60 h-60 mt-16 mx-2 flex rounded-md lg:h-44 lg:mx-20 lg:py-11">
        
        <div class="grid grid-cols-3 gap-x-16 mx-auto mt-8 lg:flex lg:mt-0 lg:space-x-16  lg:flex-nowrap lg:mx-auto">
            <a href="https://bit.ly/ujiturnitinspsundip" target="_blank" rel="noopener noreferrer" class="utility">
                <img src="/images/file-text.svg" class="h-6 lg:h-12">
                <p class="absolute text-sm font-semibold -bottom-6 text-nowrap">Uji Turnitin</p>
            </a>
            <a href="https://lib.undip.ac.id/" target="_blank" rel="noopener noreferrer" class="utility">
                <img src="/images/book.svg" class="h-6 lg:h-12">
                <p class="absolute font-semibold text-sm -bottom-6 text-nowrap">E-Library</p>
            </a>
            <a href="https://sso.undip.ac.id/" target="_blank" rel="noopener noreferrer" class="utility">
                <img src="/images/user.svg" class="h-6 lg:h-12">
                <p class="absolute font-semibold text-sm -bottom-6 text-nowrap">SSO UNDIP</p>
            </a>
            <a href="https://eprints2.undip.ac.id/" target="_blank" rel="noopener noreferrer" class="utility">
                <img src="/images/folder.svg" class="h-6 lg:h-12">
                <p class="absolute font-semibold text-sm -bottom-6 text-nowrap">E-Prints</p>
            </a>
            <a href="https://bit.ly/bebaspustakaspsundip" target="_blank" rel="noopener noreferrer" class="utility">
                <img src="/images/book-open.svg" class="h-6 lg:h-12">
                <p class="absolute font-semibold text-sm -bottom-6 text-nowrap">Bebas Pustaka</p>
            </a>
            <a href="https://bit.ly/aktivasianggotaspsundip" target="_blank" rel="noopener noreferrer" class="utility">
                <img src="/images/user-check.svg" class="h-6 lg:h-12">
                <p class="absolute font-semibold text-sm -bottom-11 lg:-bottom-6 lg:text-nowrap">Aktivasi Anggota</p>
            </a>
        </div>
        
    </section>

    {{-- Facility Section --}}
    <section class="mt-16 mx-2 lg:mx-20">
        <h1 class=" shadow-2xl font-bold text-2xl rounded bg-judul text-background py-1 pl-2 lg:text-3xl lg:pl-5">Fasilitas</h1>
        <div class="mx-4 justify-center font-poppins lg:mx-8 lg:grid lg:grid-cols-2 lg:gap-x-72">
            <div class="mt-14"><h2 class="text-xl font-semibold inline bg-isi/60 pt-1 pb-3 px-2 rounded-t-lg text-background lg:pb-4 lg:px-3 lg:text-2xl">Ruang Diskusi</h2>
                <img src="/images/r-diskusi.jpg" class="rounded-md h-48 mt-1">
            </div>
            <div class="shadow-2xl mt-14"><h2 class="text-xl font-semibold inline bg-isi/60 pt-1 pb-3 px-2 rounded-t-lg text-background lg:pb-4 lg:px-3 lg:text-2xl">Ruang Baca</h2>
                <img src="/images/p-r-baca.jpg" class="rounded-md h-48 mt-1">
            </div>
            <div class="mt-14"><h2 class="text-xl font-semibold inline bg-isi/60 pt-1 pb-3 px-2 rounded-t-lg text-nowrap text-background lg:pb-4 lg:px-3 lg:text-2xl">Koleksi Tesis</h2>
                <img src="/images/k-tesis.jpg" class="rounded-md h-48 mt-1">
            </div>
            <div class="shadow-2xl mt-14"><h2 class="text-xl font-semibold inline bg-isi/60 pt-1 pb-3 px-2 rounded-t-lg text-background lg:pb-4 lg:px-3 lg:text-2xl">Koleksi Buku</h2>
                <img src="/images/k-buku.jpg" class="rounded-md h-48 mt-1">
            </div>
        </div>
    </section>

    {{-- Staff Section --}}
    <section class="mt-16 mx-2 lg:mx-40">
        <h1 class="shadow-2xl font-bold text-2xl bg-judul text-background pl-2 py-1 rounded lg:text-3xl lg:pl-5">Staff</h1>
        <div class="justify-center font-p grid mt-6 lg:grid-cols-2 lg:mx-auto lg:w-fit lg:space-x-40 ">
            <div class="border-2 border-isi/60 px-2 py-3 rounded lg:w-[180px] lg:h-[180px]">
                <img src="/images/bu-ekana.png" class="h-20 border-[1px] border-black rounded-full mx-auto">
                <span class="my-auto ml-4 font-semibold text-center"><h3 class="font-bold">Ekana Listianawati</h3><p class="font-semibold">Sebagai: Pustakawan</p></span>
            </div>
            <div class="border-2 border-isi/60 px-2 py-3 rounded mt-6 lg:mt-0 lg:w-[176.11px] lg:h-[180px]">
                <img src="/images/pak-imam.png" class="h-20 rounded-full mx-auto object-fill border-black border-[1px]">
                <span class="my-auto ml-4 font-semibold text-center"><h3 class="font-bold">Imam Surono</h3><p class="font-semibold">Sebagai: Administrasi</p></span>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="relative bg-footer text-white pt-8 pb-5 px-5 mt-16 lg:flex lg:flex-row">
        <div class="flex">
            <img alt="Universitas Diponegoro logo" class="h-60 mx-auto" src="/images/logo-footer-undip.png">
        </div>

        <div class="lg:space-x-5 contents font-poppins">
            <div class="flex flex-col mt-4">
                <h2 class="text-xl font-bold mb-1 text-link lg:mb-4">Jam Pelayanan</h2>
                <p><span class="font-bold">Senin - Kamis :</span> 08:00 - 16:00 WIB</p>
                <p><span class="font-bold">Jumat :</span> 08:00 - 16:30 WIB</p>
                <p><span class="font-bold">Monday - Thursday :</span> 08:00 AM - 4:00 PM</p>
                <p><span class="font-bold">Friday :</span> 08:00 AM - 16:30 PM</p>
            </div>
            <div class="flex flex-col mt-4">
                <h2 class="text-xl font-bold mb-1 text-link lg:mb-4">Lainnya</h2>
                <p><a class="hover:text-link" href="https://www.undip.ac.id/" target="_blank">Universitas Diponegoro</a></p>
                <p><a class="hover:text-link" href="https://digilib.undip.ac.id/" target="_blank">Perpustakaan UNDIP Pusat</a></p>
                <p><a class="hover:text-link" href="http://pasca.undip.ac.id/" target="_blank">Sekolah Pascasarjana UNDIP</a></p>
            </div>
            <div class="flex-1 mt-4">
                <h2 class="text-xl font-bold mb-1 text-link lg:mb-4">Kontak</h2>
                <div class="mb-2">
                    <a class="hover:text-link" href="https://maps.app.goo.gl/EBzt7tN4TynFB5Z57">
                        <i class="fas fa-map-marker-alt text-link"></i>
                        <span class="ml-2">Gedung Pascasarjana B Lt 1, Jl. Imam Bardjo, SH No. 3-5 Semarang 50241</span>
                    </a>
                </div>
                <div class="mb-2">
                    <a class="hover:text-link" href="https://wa.me/6282135192661" target="_blank">
                        <i class="fas fa-phone-alt text-link"></i>
                        <span class="ml-2">082135192661</span>
                    </a>
                </div>
                <div class="mb-2 text-nowrap">
                    <a href="https://mail.google.com" target="_blank">
                        <i class="fas fa-envelope hover:text-link text-link"></i> </a>
                        <span class="ml-2">perpustakaanspsundip@gmail.com</span>
                </div>
                <div>
                    <a class="hover:text-link" href="https://www.instagram.com/perpus.spsundip/" target="_blank">   
                        <i class="text-xl fab fa-instagram text-link"></i>
                        <span class="ml-2">@perpus.spsundip</span>
                    </a>
                </div>
            </div>
        </div>
        <p class="text-center right-3 bottom-1 mt-5 text-xs font-bold text-background/80 lg:mt-56 lg:text-nowrap">
            Dibuat Oleh
        <br>    
            Siswa PKL SMKN 8 Semarang | 2024
        </p>
    </footer>

    <script>
        document.addEventListener("scroll", () => {
            const scrollTop = window.scrollY; // Jarak scroll dari atas
            const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight; // Tinggi dokumen
            const scrollPercentage = (scrollTop / docHeight) * 100; // Persentase scroll
            const progressBar = document.getElementById("progress-bar");
    
            progressBar.style.width = `${scrollPercentage}%`; // Atur lebar progress bar
        });
    </script>
    
</body>
</html>