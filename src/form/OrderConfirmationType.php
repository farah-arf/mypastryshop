// src/Form/OrderConfirmationType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class OrderConfirmationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('customer_name', TextType::class, ['required' => true])
            ->add('customer_email', EmailType::class, ['required' => true])
            ->add('customer_address', TextType::class, ['required' => true])
            ->add('cart_items', HiddenType::class) // Hidden field for cart items
            ->add('submit', SubmitType::class, ['label' => 'Confirm Order']);
    }
}
