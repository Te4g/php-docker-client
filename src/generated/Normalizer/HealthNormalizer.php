<?php

namespace Vendor\Library\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class HealthNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Health::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Health::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Health();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($data['Status']);
            }
            if (\array_key_exists('FailingStreak', $data)) {
                $object->setFailingStreak($data['FailingStreak']);
            }
            if (\array_key_exists('Log', $data)) {
                $values = [];
                foreach ($data['Log'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\HealthcheckResult::class, 'json', $context);
                }
                $object->setLog($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $object->getStatus();
            }
            if ($object->isInitialized('failingStreak') && null !== $object->getFailingStreak()) {
                $data['FailingStreak'] = $object->getFailingStreak();
            }
            if ($object->isInitialized('log') && null !== $object->getLog()) {
                $values = [];
                foreach ($object->getLog() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Log'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Health::class => false];
        }
    }
} else {
    class HealthNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Health::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Health::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Health();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($data['Status']);
            }
            if (\array_key_exists('FailingStreak', $data)) {
                $object->setFailingStreak($data['FailingStreak']);
            }
            if (\array_key_exists('Log', $data)) {
                $values = [];
                foreach ($data['Log'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\HealthcheckResult::class, 'json', $context);
                }
                $object->setLog($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $object->getStatus();
            }
            if ($object->isInitialized('failingStreak') && null !== $object->getFailingStreak()) {
                $data['FailingStreak'] = $object->getFailingStreak();
            }
            if ($object->isInitialized('log') && null !== $object->getLog()) {
                $values = [];
                foreach ($object->getLog() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Log'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Health::class => false];
        }
    }
}