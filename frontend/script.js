fetch("http://localhost/api/turnaje")
  .then(res => res.json())
  .then(data => {
    const container = document.getElementById("turnaje");
    data.forEach(t => {
      const el = document.createElement("div");
      el.textContent = t.nazev;
      container.appendChild(el);
    });
  });
