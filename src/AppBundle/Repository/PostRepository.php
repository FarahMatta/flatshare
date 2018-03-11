<?php

namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    public function getList($filter)
    {
        $qb = $this->createQueryBuilder('p');

        if (!empty($filter))
        {
            if (isset($filter['date_start']) && !empty($filter['date_start'])){
                $dateStart = $filter['date_start'];
                $qb->where('p')->setParameter('dateStart', $dateStart);
            }

            if (isset($filter['date_end']) && !empty($filter['date_end'])){
                $dateEnd = $filter['date_end'];
                $qb->where('p')->setParameter('dateEnd', $dateEnd);
            }

            if (isset($filter['city']) && !empty($filter['city'])){
                $city = $filter['city'];
                $qb->where('p')->setParameter('city', $city);
            }

            if (isset($filter['price_start']) && !empty($filter['price_start'])){
                $priceStart = $filter['price_start'];
                $qb->where('p')->setParameter('priceStart', $priceStart);
            }

            if (isset($filter['price_end']) && !empty($filter['price_end'])){
                $priceEnd = $filter['price_end'];
                $qb->where('p')->setParameter('priceEnd', $priceEnd);
            }

            if (isset($filter['left_capacity']) && !empty($filter['left_capacity'])){
                $leftCapacity = $filter['left_capacity'];
                $qb->where('p')->setParameter('leftCapacity', $leftCapacity);
            }

        }

        $qb->addOrderBy('e.date', 'ASC');

        return $qb->getQuery()->getResult();
    }
}