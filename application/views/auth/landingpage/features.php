<!-- ======= Hero Section ======= -->
<section id="" class="hero d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/img/back.png" alt="">
                    </a>
                </div>
            </div>

            <?php if ($features == 1) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/features-1.png" alt="">
                    <span class="f-lexend">100% Secure</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                        <h2 class="title-top-header fw-bold mb-3 f-lexend">Why you can trust <b
                                translate="no">Freedybank</b> ?</h2>
                        <p>
                            Your money are protected by global banks, our clients' funds are entirely deposited in
                            encrypted escrow accounts at the main credit institutions with which our payment gateway
                            works in the various countries.<br>
                            To give total security to our customers, only the account holder will have access to the
                            operations and even for <b translate="no">FreedyBank</b> it will be impossible to bypass
                            this security system.

                        </p>
                        <p>
                            <b translate="no">Freedybank</b>, being part of the TraclessBank circuit, offers to
                            customers a great guarantee, as any problem that may arise, the funds will always be
                            accessible at another institution of the TraklessBank circuit.
                        </p>
                        <p>
                            None of the tracklessbank institutions have the ability to make any type of investment or
                            money handling using clients’ funds, leaving the capital available to the customers in the
                            fiat corresponding to the balance of the <b translate="no">freedybank</b> wallet
                        </p>
                        <div class="col-12 mt-5 d-grid d-md-none d-lg-grid text-center">
                            <h4 class="text-blue-freedy link-lp fw-bold f-lexend mb-3 col-12">
                                OPEN YOUR <b translate="no">FREEDY</b> ACCOUNT IN LESS THAN 15 SECONDS
                            </h4>
                            <div class="text-center">
                                <a href="<?= base_url(); ?>auth/signup"
                                    class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                                    <span>Sign Up</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-none d-md-grid">
                        <img src="<?= base_url() ?>assets/img/img-23.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 mt-5 d-none d-md-grid d-lg-none text-center">
                        <h4 class="text-blue-freedy link-lp fw-bold f-lexend mb-3 col-12">
                            OPEN YOUR <b translate="no">FREEDY</b> ACCOUNT IN LESS THAN 15 SECONDS
                        </h4>
                        <div class="text-center">
                            <a href="<?= base_url(); ?>auth/signup"
                                class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                                <span>Sign Up</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($features == 2) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/features-2.png" alt="">
                    <span class="f-lexend">Technology</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 col-lg-6 text-start my-auto">
                        <p>
                            <b translate="no">Freedy</b> is a DApp that running on NP, considered the evolution of the
                            blockchain and it uses SECC (SMART ELECTRONIC CREDIT CERTIFICATE), developed by MONEY
                            INDUSTRIAL FACTORY on NP and issued by PBS Online which converts FIAT by capitalizing the
                            SECC 1: 1 with the currency on which it is pegged to offer a cheaper and faster alternative
                            to normal Stable coins such as Tether and others and with greater security and transparency
                            than the complicated Smart Contracts that run on Etherium and on the others blockchain.<br>
                            NP is a brand new decentralized and distributed storage system, designed and built as a
                            neural network and not as a chain. This makes it immune to attacks by 51% and solves the
                            main problems of blockchain technology; this technology has come to completion after more
                            than 5 years of research and development.
                        </p>
                    </div>
                    <div class="col-6 d-none d-lg-grid">
                        <img src="<?= base_url() ?>assets/img/img-24.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 mt-5 text-start">
                        <h2 class="f-lexend fw-bold">This new technology was born as an evolution of the blockchain and
                            is the solution for:</h2>
                        <ol>
                            <li>The problem of scalability, the first major problem that afflicts the old blockchain
                                technology ;</li>
                            <li>Resolving vulnerability to hashrate attacks;</li>
                            <li>Optimizing speed and reduce transaction costs;</li>
                            <li>An ecological system because it has low energy consumption, without losing any of the
                                strengths of traditional blockchain.</li>
                        </ol>
                        <p>
                            NP eliminates the figure of miners and ensures that this system is decentralized and truly
                            distributed on a large scale and not in the hands of a few large companies, as happens with
                            the main cryptocurrencies. This also allows us to replace the PoW, PoS or PoA with more
                            modern, secure consensus mechanisms that are not subject to hashrate attacks, minimizing
                            transaction costs and energy consumption, using the double ring cryptographic signature,
                            protocol gossip to gossip and bulletproof. All this has been made possible starting from a
                            DHT Framework previously used by the most famous P2P platforms (NAPSTER, eMule, BitTorre,
                            WinMX, etc.) rewritten from scratch in Golang and rusty, with direct acyclic graph,
                            effectively making double spending impossible.<br>
                            NP is 100% anonymous, no data will be recorded or saved on an external source, but only an
                            encrypted SHA256 file.log saved exclusively on your device is created; this will make it
                            impossible for anyone to connect a user to their wallet, even with forensic techniques, and,
                            through the implementation of CryptoNote, it will be impossible for anyone to see balances
                            and transactions, except for the user himself. NP has a different concept of the block,
                            compared to traditional blockchains, where the block carries within it all the historical
                            data, since its creation, making the blockchain increasingly heavy, while in NP the block
                            will carry with it alone essential data and the last change of ownership so as not to become
                            heavy and remain lean and fast, secure and resilient, without servers or blockchain<br>
                            NP is the only one not to have a native coin as it was conceived and built to be the basis
                            of what will be the evolution of smart contracts or tokens and to be able to manage them
                            simultaneously on a single network at a single level.<br>
                            Money Industrial Factory has developed SECC (smart electronic credit certificate) on NP,
                            intelligent electronic credit certificates, which are intelligent Stable Coins created by
                            merging Token and Smart Contract. This technology allows you to have a change of ownership
                            of a value, data or file in a safe and anonymous way without having to perform what is
                            called a transaction, but only by replacing the owner of the value, gaining speed with a
                            huge saving in computing power.<br>
                            NP, being a decentralized and distributed storage system, which arises from a P2P, does not
                            lose the quality and functionality of the basic project, remaining able to manage in
                            addition to transactions also Dapp, name domain, streaming video and file sharing of any
                            like, anonymously. Safe and non-obscurable as it is impossible to shut down a large-scale
                            and decentralized distributed system.<br>
                            NP solves the scalability problem by transforming each user into a validating node every
                            time he performs an operation, thus giving double the necessary computing power.<br>
                            all the users of <b translate="no">FreedyBank</b> will be repaid with part of the
                            commissions in a clear, transparent and fair manner, as described in the section earn with
                            <b translate="no">Freedy</b>.
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($features == 3) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/features-3.png" alt="">
                    <span class="f-lexend">Wallet</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-25.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="title-top-header fw-bold mb-3 f-lexend">Send, Receive and Request</h2>
                        <p>
                            You can identify your wallet through the unique code that you find on the home screen of
                            your account, this code is the only one that identifies your account and you must use it for
                            all incoming transfers.
                        </p>
                        <p>
                            The <b translate="no">Freedy</b> Wallet, which uses the innovative tracklessbank technology,
                            offers its customers
                            the possibility of regaining total control over their capital and managing it easily,
                            without limits and in total anonymity.</p>
                        <p>
                            The <b translate="no">freedy</b> wallet is the only one in the world that offers you,
                            through the Bank to wallet -
                            Wallet to bank functions, the possibility of sending or receiving funds by bank transfer,
                            even from an IBAN not in your name, without limitations, without any documentation required
                            and anonymously.
                        </p>
                    </div>
                    <div class="col-12 text-center my-5">
                        <h2 class="title-top-header fw-bold mb-3 f-lexend">Buy, Send and Request</h2>
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="fw-bold mb-3 f-lexend">From Bank to wallet</h2>
                        <p>
                            You can receive bank transfer in your wallet in 10 currencies (<a
                                href="<?= base_url() ?>link/whychoosing?choose=2">find out which they are</a>) from any
                            iban even if not under your name.
                        </p>
                    </div>
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-26.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-27.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="fw-bold mb-3 f-lexend">From Wallet to Wallet</h2>
                        <p>
                            Now you can send money anywhere in the world in seconds. Wallet-to-Wallet transfers are
                            instantaneous and also available between users of different banks, belonging to the
                            trackless bank circuit.</p>
                        <p>
                            Use the Wallet to Wallet function to send and receive money without limits, without any
                            documentation required and anywhere in the world, for a small fixed fee, regardless of the
                            amount.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="fw-bold mb-3 f-lexend">From Wallet to Bank</h2>
                        <p>
                            Send from your wallet by bank transfer to any IBAN, even if not in your name. By taking
                            advantage of the Swap option you can reduce costs and speed up international transfers.
                        </p>
                    </div>
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-28.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-29.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="fw-bold mb-3 f-lexend">From Swap currency</h2>
                        <p>
                            From your wallet you can convert and custody for free, in over 50 currencies at the real
                            exchange rate and without fees. Through this function you will be able to export capitals
                            100% legally (
                            <a href="<?= base_url() ?>service?service=3">Read here to discover how the
                                capital exportation works</a>).<br>
                            Using the SWAP, to convert into the currency you want to send, makes the money transfer a
                            national transfer;<br>
                            <b translate="no">FreedyBank</b> is the only one in the world to
                            offer you this service.

                        </p>
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="fw-bold mb-3 f-lexend">Top up EURO by cash into SEPA circuit</h2>
                        <p>
                            Those who want to top up his own <b translate="no">Freedybank</b> wallet or any other wallet
                            belonging to
                            TracklessBank system without having a current account, can easly go to the bank or even go
                            to a postal office and ask to make a transfer by paying the necessary money directly at the
                            counter. This is the cash transfer.<br>
                            The ordering party will have to go to the bank/postal counter and bring the cash needed for
                            the transaction.<br>
                        </p>
                        <p class="fw-bold">Procedure for transfer without current account :</p>
                        <ol>
                            <li>Go to a bank/postal counter</li>
                            <li>Collect and fill the appropriate form</li>
                        </ol>
                    </div>
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-32.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 mt-5">
                        <div class="col-6 freedy-accordion-item shadow-none py-2 px-3" style="filter: none;">
                            <p class="fw-bold">ATTENTION : </p>
                            <ul>
                                <li>PLEASE NOTE THAT THE IDENTIFICATION DETAILS OF THE BENEFICIARY ARE WRITTEN IN THE
                                    EURO CURRENCY, SECTION ‘’ ADD/RECEIVE SEPA’’</li>
                                <li>CASH TRANSFER LIMITS AND COSTS VARY FROM INSTITUTE TO INSTITUTE AND FROM COUNTRY TO
                                    COUNTRY, ACCORDING TO THE LAW IN FORCE</li>
                                <li>REMEMBER TO WRITE THE CAUSAL CORRECTLY WITHOUT ADDING OR OMITTING CHARACTERS</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 mt-5 text-center">
                        <h4 class="text-blue-freedy link-lp fw-bold f-lexend mb-3 col-12">
                            OPEN YOUR <b translate="no">FREEDY</b> ACCOUNT IN LESS THAN A MINUTE
                        </h4>
                        <div class="text-center">
                            <a href="<?= base_url(); ?>auth/signup"
                                class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                                <span>Sign Up</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($features == 4) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/features-4.png" alt="">
                    <span class="f-lexend">Missions</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="title-top-header fw-bold mb-3 f-lexend">Choose your right smart banking</h2>
                    </div>
                    <div class="col-12 col-md-8 text-start my-auto">
                        <div class="col-12 d-flex flex-column justify-content-center">
                            <h2 class="fw-bold mb-3 f-lexend">Our mission :</h2>
                            <p>
                                Empower individuals and businesses to manage their money
                                Providing them with a unique system in the world.<br>
                                Able to give them maximum banking benefits in total privacy and without limits.<br>
                                Even for those who have had problems with the banking world and don't want or can no
                                longer access a current account or related services.<br>
                                Managing one's money and moving one's capital anywhere in the world, through normal
                                banks, has become increasingly complex, with multiple checks or requests for
                                documentation due to increasingly stringent controls by states, creditors and fiscal
                                controls. In <b translate="no">FreedyBank</b>, thanks to the use of TracklessBank
                                technology, all these
                                procedures can be eliminated, guaranteeing an anonymous service.
                            </p>
                        </div>
                    </div>
                    <div class="col-4 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-30.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 text-center my-5">
                        <p>
                            Managing one's money and moving one's capital anywhere in the world, through normal banks,
                            has become increasingly complex, with multiple checks or requests for documentation due to
                            increasingly stringent controls by states, creditors and fiscal controls. In <b
                                translate="no">FreedyBank</b>, thanks to the use of TracklessBank technology, all these
                            procedures can be eliminated, guaranteeing an anonymous service.
                        </p>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="col-12 d-flex flex-column justify-content-center">
                            <h2 class="fw-bold mb-5 f-lexend text-start">Why <b translate="no">FreedyBank</b>?</h2>
                            <div class="row">
                                <div class="col-12 col-md-6 py-3">
                                    <div class="card p-3 shadow-sm" style="
                                    border: 3px solid #0078F0;
                                    filter: drop-shadow(0px 10px 10px rgba(0, 0, 0, 0.25));
                                    border-radius: 15px;">
                                        <h3 class="fw-bold mb-3 f-lexend text-center">Other Banks</h3>
                                        <div class="content-freedy minus text-start">
                                            <ul class="ps-0">
                                                <li class="pb-2">Request of personal ID, business documentation, proof
                                                    of
                                                    residence ( KYC )</li>
                                                <li class="pb-2">Video call request to open an account</li>
                                                <li class="pb-2">Sending tax documentation to the control authorities
                                                </li>
                                                <li class="pb-2">Documents request for your bank transaction</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 py-3">
                                    <div class="card p-3 shadow-sm" style="
                                    border: 3px solid #0078F0;
                                    filter: drop-shadow(0px 10px 10px rgba(0, 0, 0, 0.25));
                                    border-radius: 15px;">
                                        <h3 class="text-blue-freedy fw-bold mb-3 f-lexend text-center" translate="no">
                                            Freedy Bank</h3>
                                        <div class="content-freedy text-start">
                                            <ul class="ps-0">
                                                <li class="pb-2">No KYC required, Open an account only with email &
                                                    password</li>
                                                <li class="pb-2">No authetication required to open an account</li>
                                                <li class="pb-2">No legal obligation to comunicate with the tax
                                                    auhtorities
                                                </li>
                                                <li class="pb-2">No documents request or limits on your <b
                                                        translate="no">Freedy</b> account
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section><!-- End Hero -->