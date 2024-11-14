      <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
              <nav class="pull-left">
                  <ul class="nav">
                      <li class="nav-item">
                          <a class="nav-link" href="https://yourapps.co.ke/">
                              Apex E-commerce
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"> Help </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"> Licenses </a>
                      </li>
                  </ul>
              </nav>
              <div class="copyright">
                  &copy; {{ date('Y') }}, Design & Developed by
                  <a href="https://yourapps.co.ke/">Your Apps Ltd</a>
              </div>
          </div>
      </footer>
      </div>
      </div>
      <!--   Core JS Files   -->
      <script src="{{ asset('admin-assets/assets/js/core/jquery-3.7.1.min.js') }}"></script>
      <script src="{{ asset('admin-assets/assets/js/core/popper.min.js ') }}"></script>
      <script src="{{ asset('admin-assets/assets/js/core/bootstrap.min.js') }}"></script>

      <!-- jQuery Scrollbar -->
      <script src="{{ asset('admin-assets/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

      <!-- Chart JS -->
      <script src="{{ asset('admin-assets/assets/js/plugin/chart.js/chart.min.js') }}"></script>

      <!-- jQuery Sparkline -->
      <script src="{{ asset('admin-assets/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

      <!-- Chart Circle -->
      <script src="{{ asset('admin-assets/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

      <!-- Datatables -->
      <script src="{{ asset('admin-assets/assets/js/plugin/datatables/datatables.min.js') }}"></script>

      <!-- Bootstrap Notify -->
      <script src="{{ asset('admin-assets/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

      <!-- jQuery Vector Maps -->
      <script src="{{ asset('admin-assets/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
      <script src="{{ asset('admin-assets/assets/js/plugin/jsvectormap/world.js') }}"></script>

      <!-- Sweet Alert -->
      <script src="{{ asset('admin-assets/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

      <!-- apexadmin JS -->
      <script src="{{ asset('admin-assets/assets/js/apexadmin.min.js') }}"></script>

      <!-- apexadmin DEMO methods, don't include it in your project! -->
      <script src="{{ asset('admin-assets/assets/js/setting-demo.js') }}"></script>
      <script src="{{ asset('admin-assets/assets/js/demo.js') }}"></script>

      <!-- Select2 Initialization for Tags Multi-Select -->
      <script src="{{ asset('admin-assets/assets/js/select2.min.js>') }}"></script>
      </script>


      <script>
          $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
              type: "line",
              height: "70",
              width: "100%",
              lineWidth: "2",
              lineColor: "#177dff",
              fillColor: "rgba(23, 125, 255, 0.14)",
          });

          $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
              type: "line",
              height: "70",
              width: "100%",
              lineWidth: "2",
              lineColor: "#f3545d",
              fillColor: "rgba(243, 84, 93, .14)",
          });

          $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
              type: "line",
              height: "70",
              width: "100%",
              lineWidth: "2",
              lineColor: "#ffa534",
              fillColor: "rgba(255, 165, 52, .14)",
          });

          $(document).ready(function() {
              $("#basic-datatables").DataTable({});

              $("#multi-filter-select").DataTable({
                  pageLength: 5,
                  initComplete: function() {
                      this.api()
                          .columns()
                          .every(function() {
                              var column = this;
                              var select = $(
                                      '<select class="form-select"><option value=""></option></select>'
                                  )
                                  .appendTo($(column.footer()).empty())
                                  .on("change", function() {
                                      var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                      column
                                          .search(val ? "^" + val + "$" : "", true, false)
                                          .draw();
                                  });

                              column
                                  .data()
                                  .unique()
                                  .sort()
                                  .each(function(d, j) {
                                      select.append(
                                          '<option value="' + d + '">' + d + "</option>"
                                      );
                                  });
                          });
                  },
              });

              // Add Row
              $("#add-row").DataTable({
                  pageLength: 5,
              });

              var action =
                  '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

              $("#addRowButton").click(function() {
                  $("#add-row")
                      .dataTable()
                      .fnAddData([
                          $("#addName").val(),
                          $("#addPosition").val(),
                          $("#addOffice").val(),
                          action,
                      ]);
                  $("#addRowModal").modal("hide");
              });
          });




          document.addEventListener('DOMContentLoaded', function() {
              console.log('Document Ready');

              const categorySelect = document.getElementById('category');
              const subcategorySelect = document.getElementById('subcategory');

              categorySelect.addEventListener('change', function() {
                  console.log('Category Changed');
                  const categoryId = this.value;

                  if (categoryId) {
                      fetch('/api/cat/' + categoryId)
                          .then(response => {
                              if (!response.ok) {
                                  throw new Error('Network response was not ok: ' + response.statusText);
                              }
                              return response.json();
                          })
                          .then(data => {
                              // Clear existing options
                              subcategorySelect.innerHTML = '';
                              // Add default option
                              subcategorySelect.appendChild(new Option('Select Sub Category', ''));

                              // Populate subcategory options
                              data.forEach(item => {
                                  const option = new Option(item.name, item.id);
                                  subcategorySelect.appendChild(option);
                              });
                          })
                          .catch(error => {
                              console.error('Fetch error:', error);
                          });
                  } else {
                      // Clear subcategory if no category is selected
                      subcategorySelect.innerHTML = '';
                      subcategorySelect.appendChild(new Option('Select Sub Category', ''));
                  }
              });
          });



          //Admin  Product Form  Image Preview
          function previewImage(event, previewId) {
              const imagePreview = document.getElementById(previewId);
              const file = event.target.files[0];

              if (file) {
                  const reader = new FileReader();
                  reader.onload = function(e) {
                      imagePreview.src = e.target.result;
                      imagePreview.style.display = 'block';
                  };
                  reader.readAsDataURL(file);
              } else {
                  imagePreview.style.display = 'none';
                  imagePreview.src = '';
              }
          }


          $(document).ready(function() {
              $('.js-example-basic-single').select2();
          });




          //Admin product Category select autopopulate to select
          document.getElementById('category').addEventListener('change', function() {
              var categoryId = this.value;
              var subcategorySelect = document.getElementById('subcategory');

              // Clear current subcategory options
              subcategorySelect.innerHTML = '<option value="">Select Sub Category</option>';

              if (categoryId) {
                  fetch('/api/cat/' + categoryId)
                      .then(response => response.json())
                      .then(data => {
                          data.subcategories.forEach(subcategory => {
                              var option = document.createElement('option');
                              option.value = subcategory.id;
                              option.textContent = subcategory.name;
                              subcategorySelect.appendChild(option);
                          });
                      })
                      .catch(error => console.error('Error:', error));
              }
          });
      </script>

      </body>

      </html>
