// src/Controller/OrderController.php
namespace App\Controller;

use App\Form\OrderConfirmationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/order/confirmation", name="order_confirmation")
     */
    public function orderConfirmation(Request $request): Response
    {
        $form = $this->createForm(OrderConfirmationType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle form submission, e.g., process the order

            // Redirect to a thank you page or home page
            return $this->redirectToRoute('thank_you');
        }

        return $this->render('confirmation.html.twig', [
            'orderForm' => $form->createView(),
        ]);
    }
}
