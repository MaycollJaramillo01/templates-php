<div class="container" style="padding-bottom:var(--spacing-4);">
  <button class="btn btn-accent" data-social-modal-open data-anim="from-bottom">View our social proof</button>
</div>
<div class="card" data-social-modal hidden role="dialog" aria-modal="true" aria-labelledby="social-modal-title" style="position:fixed; inset:10% 5%; max-width:600px; margin:auto; z-index:50; background:var(--color-surface); box-shadow:var(--shadow-soft);">
  <div class="stack" style="padding:var(--spacing-6);">
    <div class="flex flex-between" style="align-items:flex-start;">
      <div>
        <h2 id="social-modal-title" data-anim="from-bottom">Connect with <?php echo htmlspecialchars($Company); ?></h2>
        <p class="text-muted" data-anim="from-bottom" data-anim-delay="100">Follow our projects and community highlights.</p>
      </div>
      <button class="nav-toggle" data-social-close aria-label="Close social modal">×</button>
    </div>
    <div class="stack" style="flex-direction:row; flex-wrap:wrap; gap:var(--spacing-3);">
      <?php echo render_social_icons($Social); ?>
    </div>
  </div>
</div>
<script>
(function(){
  const modal = document.querySelector('[data-social-modal]');
  if(!modal) return;
  const open = document.querySelector('[data-social-modal-open]');
  const closeBtn = modal.querySelector('[data-social-close]');
  function openModal(){
    modal.hidden = false;
    modal.setAttribute('open','true');
  }
  function closeModal(){
    modal.hidden = true;
    modal.removeAttribute('open');
  }
  if(open){open.addEventListener('click', function(){openModal();});}
  if(closeBtn){closeBtn.addEventListener('click', function(){closeModal();});}
})();
</script>
