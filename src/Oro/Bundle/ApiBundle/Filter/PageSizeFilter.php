<?php

namespace Oro\Bundle\ApiBundle\Filter;

use Doctrine\Common\Collections\Criteria;

/**
 * A filter that can be used to specify the maximum number of records on one page.
 */
class PageSizeFilter extends StandaloneFilter
{
    /**
     * {@inheritdoc}
     */
    public function apply(Criteria $criteria, FilterValue $value = null)
    {
        $val = null !== $value
            ? $value->getValue()
            : $this->getDefaultValue();
        if (null !== $val) {
            $criteria->setMaxResults($val);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createExpression(FilterValue $value = null)
    {
        return null;
    }
}
