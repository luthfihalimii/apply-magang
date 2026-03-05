<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductPageTest extends TestCase
{
    public function test_product_page_shows_product_catalog_sections(): void
    {
        $response = $this->get('/produk');

        $response->assertOk();
        $response->assertSeeText('Produk');
        $response->assertSeeText('Semua Produk');
        $response->assertSeeText('Kategori Produk');
        $response->assertSeeText('HRIS/HRMS');
        $response->assertSeeText('Tendering');
        $response->assertSeeText('Insight GOV');
    }
}
