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
    class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\TaskStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\TaskStatus::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\TaskStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Timestamp', $data)) {
                $object->setTimestamp($data['Timestamp']);
            }
            if (\array_key_exists('State', $data)) {
                $object->setState($data['State']);
            }
            if (\array_key_exists('Message', $data)) {
                $object->setMessage($data['Message']);
            }
            if (\array_key_exists('Err', $data)) {
                $object->setErr($data['Err']);
            }
            if (\array_key_exists('ContainerStatus', $data)) {
                $object->setContainerStatus($this->denormalizer->denormalize($data['ContainerStatus'], \Vendor\Library\Generated\Model\ContainerStatus::class, 'json', $context));
            }
            if (\array_key_exists('PortStatus', $data)) {
                $object->setPortStatus($this->denormalizer->denormalize($data['PortStatus'], \Vendor\Library\Generated\Model\PortStatus::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['Timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['Message'] = $object->getMessage();
            }
            if ($object->isInitialized('err') && null !== $object->getErr()) {
                $data['Err'] = $object->getErr();
            }
            if ($object->isInitialized('containerStatus') && null !== $object->getContainerStatus()) {
                $data['ContainerStatus'] = $this->normalizer->normalize($object->getContainerStatus(), 'json', $context);
            }
            if ($object->isInitialized('portStatus') && null !== $object->getPortStatus()) {
                $data['PortStatus'] = $this->normalizer->normalize($object->getPortStatus(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\TaskStatus::class => false];
        }
    }
} else {
    class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\TaskStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\TaskStatus::class;
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
            $object = new \Vendor\Library\Generated\Model\TaskStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Timestamp', $data)) {
                $object->setTimestamp($data['Timestamp']);
            }
            if (\array_key_exists('State', $data)) {
                $object->setState($data['State']);
            }
            if (\array_key_exists('Message', $data)) {
                $object->setMessage($data['Message']);
            }
            if (\array_key_exists('Err', $data)) {
                $object->setErr($data['Err']);
            }
            if (\array_key_exists('ContainerStatus', $data)) {
                $object->setContainerStatus($this->denormalizer->denormalize($data['ContainerStatus'], \Vendor\Library\Generated\Model\ContainerStatus::class, 'json', $context));
            }
            if (\array_key_exists('PortStatus', $data)) {
                $object->setPortStatus($this->denormalizer->denormalize($data['PortStatus'], \Vendor\Library\Generated\Model\PortStatus::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['Timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['Message'] = $object->getMessage();
            }
            if ($object->isInitialized('err') && null !== $object->getErr()) {
                $data['Err'] = $object->getErr();
            }
            if ($object->isInitialized('containerStatus') && null !== $object->getContainerStatus()) {
                $data['ContainerStatus'] = $this->normalizer->normalize($object->getContainerStatus(), 'json', $context);
            }
            if ($object->isInitialized('portStatus') && null !== $object->getPortStatus()) {
                $data['PortStatus'] = $this->normalizer->normalize($object->getPortStatus(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\TaskStatus::class => false];
        }
    }
}