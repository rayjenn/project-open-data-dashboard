</div> <!-- /#main-container -->

<hr>
      <footer class="footer">
        <div class="container <?php if(!empty($container_class)) echo $container_class; ?>">
        <div class="pull-left"><a href="https://github.com/GSA/project-open-data-dashboard/issues">Fork me on Github</a></div>




        <?php if (!$this->session->userdata('username')) : ?>
          <div class="pull-right">
            <a class="btn btn-default btn-auth btn-github" href="<?php echo site_url('login')?>">Sign in with <b>GitHub</b></a>
          </div>
        <?php endif; ?>



      </div>
      </footer>
    </div> <!-- /container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo site_url('js/vendor/jquery-1.10.1.min.js')?>"><\/script>')</script>

        <script src="<?php echo site_url('js/vendor/bootstrap.min.js')?>"></script>

        <script src="<?php echo site_url('js/main.js')?>"></script>

    </body>
</html>
