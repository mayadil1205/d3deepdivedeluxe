// Event listener untuk tombol kirim
document.getElementById('send-btn').addEventListener('click', sendMessage);
document.getElementById('user-input').addEventListener('keypress', function (event) {
    if (event.key === 'Enter') {
        handleUserInput();
        event.preventDefault();
    }
});

function sendMessage() {
    const userInput = document.getElementById('user-input').value;
    if (userInput.trim() === '') return;

    addMessageToChat('user-message', userInput); // Tampilkan input pengguna
    
    displayFishInfo(userInput); // Cari dan tampilkan data ikan
    document.getElementById('user-input').value = ''; // Kosongkan input
}

// Fungsi untuk mengambil data ikan dari file JSON
async function getFishData(fishName) {
    try {
        const response = await fetch('fish_data.json');
        const data = await response.json();

        // Debugging: Lihat seluruh data
        console.log('Data yang diterima:', data);

        // Jika data berupa array, gunakan for-of untuk iterasi
        for (const fish of data) {
            if (fish.name.toLowerCase() === fishName.toLowerCase()) {
                return fish;
            }
        }
        return null; // Jika tidak ditemukan
    } catch (error) {
        console.error('Error fetching fish data:', error);
        return null;
    }
}

// Fungsi untuk menampilkan informasi ikan di chat
async function displayFishInfo(fishName) {
    const fishData = await getFishData(fishName);
    if (fishData) {
        // Cek apakah URL ada dan tampilkan dengan benar
        let message = fishData.url
            ? `Nama ikan: <a href="${fishData.url}" target="_blank">${fishData.name}</a>`
            : `Nama ikan: ${fishData.name}`;

        // Tambahkan informasi taksonomi (kingdom, phylum, class, dll) dari `scientific_classification`
        const classification = fishData.meta.scientific_classification;
        message += `<br>Kingdom: ${classification.kingdom || 'Tidak tersedia'}`;
        message += `<br>Phylum: ${classification.phylum || 'Tidak tersedia'}`;
        message += `<br>Class: ${classification.class || 'Tidak tersedia'}`;
        message += `<br>Order: ${classification.order || 'Tidak tersedia'}`;
        message += `<br>Family: ${classification.family || 'Tidak tersedia'}`;
        message += `<br>Genus: ${classification.genus || 'Tidak tersedia'}`;
        message += `<br>Subgenus: ${classification.subgenus || 'Tidak tersedia'}`;
        message += `<br>Species: ${classification.species || 'Tidak tersedia'}`;

        addMessageToChat('bot', message);

        // Cek dan tampilkan gambar jika ada
        if (fishData.img_src_set && fishData.img_src_set["1.5x"]) {
            const imgElement = document.createElement('img');
            imgElement.src = fishData.img_src_set["1.5x"]; // URL gambar
            imgElement.alt = `Image of ${fishData.name}`; // Alt text untuk gambar
            imgElement.style.width = '30%'; // Set width relative to the container's width
            imgElement.style.height = 'auto'; // Maintain aspect ratio
            imgElement.style.borderRadius = '8px'; // Aesthetic border radius
            addMessageToChat('bot', '', imgElement); // Tambahkan gambar ke chat
        } else {
            console.error('Image URL tidak ditemukan!');
        }        
    } else {
        addMessageToChat('bot', 'Ikan tidak ditemukan!');
    }
}

// Fungsi untuk menambahkan pesan ke chat
function addMessageToChat(sender, message, image = null) {
    const chatBox = document.getElementById('chat-box');
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message', sender);

    // Jika ada pesan (teks atau tautan)
    if (message) {
        messageDiv.innerHTML = message; // Pakai innerHTML untuk mendukung tautan
    }

    // Jika ada gambar, tambahkan elemen gambar
    if (image) {
        messageDiv.appendChild(image);
    }

    chatBox.appendChild(messageDiv);
    chatBox.scrollTop = chatBox.scrollHeight; // Scroll otomatis ke bawah
}
