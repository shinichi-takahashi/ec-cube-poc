<?php

namespace Eccube\Service;

use Eccube\Application;
use Eccube\Entity\Order;
use Symfony\Component\HttpFoundation\Request;

class OrderService extends AbstractService
{
	private $app;
	
	public function __construct(Application $app) 
	{
		$this->app = $app;
	}

	public function insert($total) {
		// 商品の取得
		$product = $this->app['orm.em']
			->getRepository('Eccube\\Entity\\Product')
			->find($this->app['request']->get('product_id'));

		// 顧客情報の取得
		$customer = $this->app['orm.em']
			->getRepository('Eccube\\Entity\\Customer')
			->find($this->app['request']->get('customer_id'));

		if (!$product || !$customer) {
			return 'not found';
		}

		// 商品の在庫を減らす
		$product->setStock( $product->getStock() - 1 );
		$this->app['orm.em']->persist($product);
		$this->app['orm.em']->flush();

		// 注文情報を登録
		$order = new Order();
		$order
			->setProductId($product->getId())
			->setCustomerId($customer->getId())
			->setTotalPrice($total);
		$this->app['orm.em']->persist($order);
		$this->app['orm.em']->flush();

		return true;
	}
}