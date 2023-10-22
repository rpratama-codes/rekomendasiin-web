    </div>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <strong>Copyright &copy; 2020-2021 <a href="<?= base_url() ?>">Rekomendasiin.com</a>.</strong> All rights reserved.
    </footer>
    </div>
    <script>
      window.setTimeout(function() {
        $(".alert").fadeTo(100, 0).slideUp(500, function() {
          $(this).remove()
        });
      }, 1000)
    </script>
    </body>

    </html>