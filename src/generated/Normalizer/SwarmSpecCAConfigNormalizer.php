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
    class SwarmSpecCAConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\SwarmSpecCAConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NodeCertExpiry', $data)) {
                $object->setNodeCertExpiry($data['NodeCertExpiry']);
            }
            if (\array_key_exists('ExternalCAs', $data)) {
                $values = [];
                foreach ($data['ExternalCAs'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class, 'json', $context);
                }
                $object->setExternalCAs($values);
            }
            if (\array_key_exists('SigningCACert', $data)) {
                $object->setSigningCACert($data['SigningCACert']);
            }
            if (\array_key_exists('SigningCAKey', $data)) {
                $object->setSigningCAKey($data['SigningCAKey']);
            }
            if (\array_key_exists('ForceRotate', $data)) {
                $object->setForceRotate($data['ForceRotate']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nodeCertExpiry') && null !== $object->getNodeCertExpiry()) {
                $data['NodeCertExpiry'] = $object->getNodeCertExpiry();
            }
            if ($object->isInitialized('externalCAs') && null !== $object->getExternalCAs()) {
                $values = [];
                foreach ($object->getExternalCAs() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ExternalCAs'] = $values;
            }
            if ($object->isInitialized('signingCACert') && null !== $object->getSigningCACert()) {
                $data['SigningCACert'] = $object->getSigningCACert();
            }
            if ($object->isInitialized('signingCAKey') && null !== $object->getSigningCAKey()) {
                $data['SigningCAKey'] = $object->getSigningCAKey();
            }
            if ($object->isInitialized('forceRotate') && null !== $object->getForceRotate()) {
                $data['ForceRotate'] = $object->getForceRotate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\SwarmSpecCAConfig::class => false];
        }
    }
} else {
    class SwarmSpecCAConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class;
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
            $object = new \Vendor\Library\Generated\Model\SwarmSpecCAConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NodeCertExpiry', $data)) {
                $object->setNodeCertExpiry($data['NodeCertExpiry']);
            }
            if (\array_key_exists('ExternalCAs', $data)) {
                $values = [];
                foreach ($data['ExternalCAs'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class, 'json', $context);
                }
                $object->setExternalCAs($values);
            }
            if (\array_key_exists('SigningCACert', $data)) {
                $object->setSigningCACert($data['SigningCACert']);
            }
            if (\array_key_exists('SigningCAKey', $data)) {
                $object->setSigningCAKey($data['SigningCAKey']);
            }
            if (\array_key_exists('ForceRotate', $data)) {
                $object->setForceRotate($data['ForceRotate']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('nodeCertExpiry') && null !== $object->getNodeCertExpiry()) {
                $data['NodeCertExpiry'] = $object->getNodeCertExpiry();
            }
            if ($object->isInitialized('externalCAs') && null !== $object->getExternalCAs()) {
                $values = [];
                foreach ($object->getExternalCAs() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ExternalCAs'] = $values;
            }
            if ($object->isInitialized('signingCACert') && null !== $object->getSigningCACert()) {
                $data['SigningCACert'] = $object->getSigningCACert();
            }
            if ($object->isInitialized('signingCAKey') && null !== $object->getSigningCAKey()) {
                $data['SigningCAKey'] = $object->getSigningCAKey();
            }
            if ($object->isInitialized('forceRotate') && null !== $object->getForceRotate()) {
                $data['ForceRotate'] = $object->getForceRotate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\SwarmSpecCAConfig::class => false];
        }
    }
}