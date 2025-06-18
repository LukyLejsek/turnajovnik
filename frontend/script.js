fetch("http://localhost:3000/api/turnaje")
  .then(res => res.json())
  .then(data => {
    const container = document.getElementById("turnaje");
    data.forEach(t => {
      const el = document.createElement("div");
      el.textContent = t.nazev;
      container.appendChild(el);
    });
  });
