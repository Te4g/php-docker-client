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
    class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CanRemove', $data)) {
                $object->setCanRemove($data['CanRemove']);
            }
            if (\array_key_exists('DetachKeys', $data)) {
                $object->setDetachKeys($data['DetachKeys']);
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Running', $data)) {
                $object->setRunning($data['Running']);
            }
            if (\array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
            }
            if (\array_key_exists('ProcessConfig', $data)) {
                $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], \Vendor\Library\Generated\Model\ProcessConfig::class, 'json', $context));
            }
            if (\array_key_exists('OpenStdin', $data)) {
                $object->setOpenStdin($data['OpenStdin']);
            }
            if (\array_key_exists('OpenStderr', $data)) {
                $object->setOpenStderr($data['OpenStderr']);
            }
            if (\array_key_exists('OpenStdout', $data)) {
                $object->setOpenStdout($data['OpenStdout']);
            }
            if (\array_key_exists('ContainerID', $data)) {
                $object->setContainerID($data['ContainerID']);
            }
            if (\array_key_exists('Pid', $data)) {
                $object->setPid($data['Pid']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('canRemove') && null !== $object->getCanRemove()) {
                $data['CanRemove'] = $object->getCanRemove();
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('processConfig') && null !== $object->getProcessConfig()) {
                $data['ProcessConfig'] = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('openStderr') && null !== $object->getOpenStderr()) {
                $data['OpenStderr'] = $object->getOpenStderr();
            }
            if ($object->isInitialized('openStdout') && null !== $object->getOpenStdout()) {
                $data['OpenStdout'] = $object->getOpenStdout();
            }
            if ($object->isInitialized('containerID') && null !== $object->getContainerID()) {
                $data['ContainerID'] = $object->getContainerID();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class => false];
        }
    }
} else {
    class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class;
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
            $object = new \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CanRemove', $data)) {
                $object->setCanRemove($data['CanRemove']);
            }
            if (\array_key_exists('DetachKeys', $data)) {
                $object->setDetachKeys($data['DetachKeys']);
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Running', $data)) {
                $object->setRunning($data['Running']);
            }
            if (\array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
            }
            if (\array_key_exists('ProcessConfig', $data)) {
                $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], \Vendor\Library\Generated\Model\ProcessConfig::class, 'json', $context));
            }
            if (\array_key_exists('OpenStdin', $data)) {
                $object->setOpenStdin($data['OpenStdin']);
            }
            if (\array_key_exists('OpenStderr', $data)) {
                $object->setOpenStderr($data['OpenStderr']);
            }
            if (\array_key_exists('OpenStdout', $data)) {
                $object->setOpenStdout($data['OpenStdout']);
            }
            if (\array_key_exists('ContainerID', $data)) {
                $object->setContainerID($data['ContainerID']);
            }
            if (\array_key_exists('Pid', $data)) {
                $object->setPid($data['Pid']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('canRemove') && null !== $object->getCanRemove()) {
                $data['CanRemove'] = $object->getCanRemove();
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('processConfig') && null !== $object->getProcessConfig()) {
                $data['ProcessConfig'] = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('openStderr') && null !== $object->getOpenStderr()) {
                $data['OpenStderr'] = $object->getOpenStderr();
            }
            if ($object->isInitialized('openStdout') && null !== $object->getOpenStdout()) {
                $data['OpenStdout'] = $object->getOpenStdout();
            }
            if ($object->isInitialized('containerID') && null !== $object->getContainerID()) {
                $data['ContainerID'] = $object->getContainerID();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class => false];
        }
    }
}