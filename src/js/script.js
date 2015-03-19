function FensterOeffnen (Adresse, width, height) {
  MeinFenster = window.open(Adresse, "Zweitfenster", "width="+width+",height="+height+",left=0,top=0");
  MeinFenster.focus();
}