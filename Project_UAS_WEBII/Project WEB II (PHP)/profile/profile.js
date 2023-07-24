function handleSearch(event) {
    event.preventDefault(); // untuk menghentikan pengiriman form secara default

    const searchTerm = document.getElementById('search').value;
    const url = `../deskripsi/${searchTerm}.html`;

    // Lakukan pengalihan ke halaman pencarian
    window.location.href = url;
  }

  document.querySelector('form').addEventListener('submit', handleSearch);
