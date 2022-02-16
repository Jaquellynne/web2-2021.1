<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', Desenvolvido por ') }}<span class="@if(Auth::guest()) text-white @endif">{{ __('Car System') }}</span>
                </span>
            </div>
        </div>
    </div>
</footer>