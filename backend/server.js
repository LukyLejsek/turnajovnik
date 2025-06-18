const express = require("express");
const cors = require("cors");
const app = express();
const PORT = 3000;

app.use(cors()); // povolí požadavky z frontendu

// Mock data nebo data z databáze
app.get("/api/turnaje", (req, res) => {
  res.json([{ id: 1, nazev: "Florbal Cup" }, { id: 2, nazev: "Hokej Open" }]);
});

app.listen(PORT, () => console.log(`Server běží na http://localhost:${PORT}`));
