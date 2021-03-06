<?php

    namespace AppBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\JsonResponse;

    class LuckyController
    {
        /**
         * @Route("/lucky/number")
         */
        public function numberAction()
        {
            $number = rand(0, 100);

            return new Response(
                '<html><body>Lucky number: ' . $number . '</body></html>'
            );
        }


        /**
         * @Route("/api/lucky/number")
         */
        public function apiNumberAction()
        {

            $data = array(
                'lucky_number' => rand(0, 100),
            );

            // calls json_encode and sets the Content-Type header
            return new JsonResponse($data);

        }

    }