const express = require('express');
const bodyParser = require('body-parser');
const fs = require('fs');
const app = express();
const PORT = process.env.PORT || 3000;

// Middleware
app.use(bodyParser.json());
app.use(express.static('public'));

// Endpoint untuk menyimpan data ikan
app.post('/saveFishData', (req, res) => {
    const fishData = req.body;

    // Baca file fish_data.json
    fs.readFile('fish_data.json', (err, data) => {
        if (err) {
            return res.status(500).send('Error reading file');
        }

        let jsonData = [];
        if (data.length) {
            jsonData = JSON.parse(data);
        }

        // Tambahkan data ikan baru
        jsonData.push(fishData);

        // Tulis kembali ke file fish_data.json
        fs.writeFile('fish_data.json', JSON.stringify(jsonData, null, 2), (err) => {
            if (err) {
                return res.status(500).send('Error writing file');
            }
            res.status(200).send('Data saved successfully');
        });
    });
});

// Jalankan server
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});