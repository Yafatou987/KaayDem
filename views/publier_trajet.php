<?php $title = 'Publier un trajet'; ?>

<div class="section-head" style="margin-bottom:1rem">
  <h2>Publier un trajet</h2>
</div>

<div class="card">
  <form method="POST" action="/publier-trajet">
    <div class="form-row">
      <div class="form-group">
        <label>Ville de départ</label>
        <input class="form-control" type="text" name="ville_depart" placeholder="Dakar Plateau" required>
      </div>
      <div class="form-group">
        <label>Ville d'arrivée</label>
        <input class="form-control" type="text" name="ville_arrivee" placeholder="Diamniadio" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group">
        <label>Date</label>
        <input class="form-control" type="date" name="date_depart" required>
      </div>
      <div class="form-group">
        <label>Heure</label>
        <input class="form-control" type="time" name="heure_depart" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group">
        <label>Nombre de places</label>
        <input class="form-control" type="number" name="nb_places" min="1" max="8" placeholder="3" required>
      </div>
      <div class="form-group">
        <label>Prix / place (FCFA)</label>
        <input class="form-control" type="number" name="prix" placeholder="1500" required>
      </div>
    </div>
    <div class="form-group">
      <label>Points d'arrêt <span class="opt">(optionnel)</span></label>
      <input class="form-control" type="text" name="points_arret" placeholder="Rufisque, Bargny…">
    </div>
    <button class="btn-primary" type="submit">Publier le trajet</button>
  </form>
</div>