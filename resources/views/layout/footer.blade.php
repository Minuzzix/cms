<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
<script>
    // $(document).on('click', '.btn-delete', function (event) {
    //     event.preventDefault();
    //     if (confirm('Are you sure you want to delete?')) {
    //         $(this).closest('form').submit();
    //     }
    // });

    $.ajaxSetup({
        headers:{
            'X-CSRF_TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

    $('.btn-delete').click(function(event){
        let td=$(this).parents('td');
        let url=td.attr('data-url');
        //console.log(td.attr('data-url'));
        if(confirm('Are you sure want to delete?')){
            $.ajax({
                method:'delete',
                url:url,
                success:function(response){
                    console.log(response)
                    alert(response.success)
                    td.parents('tr').remove()   //delete in front end
                }
            })
        }
    })
</script>

</body>
</html>