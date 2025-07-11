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
    class ContainerStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerState::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerState::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ContainerState();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($data['Status']);
            }
            if (\array_key_exists('Running', $data)) {
                $object->setRunning($data['Running']);
            }
            if (\array_key_exists('Paused', $data)) {
                $object->setPaused($data['Paused']);
            }
            if (\array_key_exists('Restarting', $data)) {
                $object->setRestarting($data['Restarting']);
            }
            if (\array_key_exists('OOMKilled', $data)) {
                $object->setOOMKilled($data['OOMKilled']);
            }
            if (\array_key_exists('Dead', $data)) {
                $object->setDead($data['Dead']);
            }
            if (\array_key_exists('Pid', $data)) {
                $object->setPid($data['Pid']);
            }
            if (\array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
            }
            if (\array_key_exists('Error', $data)) {
                $object->setError($data['Error']);
            }
            if (\array_key_exists('StartedAt', $data)) {
                $object->setStartedAt($data['StartedAt']);
            }
            if (\array_key_exists('FinishedAt', $data)) {
                $object->setFinishedAt($data['FinishedAt']);
            }
            if (\array_key_exists('Health', $data) && $data['Health'] !== null) {
                $object->setHealth($this->denormalizer->denormalize($data['Health'], \Vendor\Library\Generated\Model\Health::class, 'json', $context));
            }
            elseif (\array_key_exists('Health', $data) && $data['Health'] === null) {
                $object->setHealth(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $object->getStatus();
            }
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('paused') && null !== $object->getPaused()) {
                $data['Paused'] = $object->getPaused();
            }
            if ($object->isInitialized('restarting') && null !== $object->getRestarting()) {
                $data['Restarting'] = $object->getRestarting();
            }
            if ($object->isInitialized('oOMKilled') && null !== $object->getOOMKilled()) {
                $data['OOMKilled'] = $object->getOOMKilled();
            }
            if ($object->isInitialized('dead') && null !== $object->getDead()) {
                $data['Dead'] = $object->getDead();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['Error'] = $object->getError();
            }
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['StartedAt'] = $object->getStartedAt();
            }
            if ($object->isInitialized('finishedAt') && null !== $object->getFinishedAt()) {
                $data['FinishedAt'] = $object->getFinishedAt();
            }
            if ($object->isInitialized('health') && null !== $object->getHealth()) {
                $data['Health'] = $this->normalizer->normalize($object->getHealth(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerState::class => false];
        }
    }
} else {
    class ContainerStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerState::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerState::class;
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
            $object = new \Vendor\Library\Generated\Model\ContainerState();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($data['Status']);
            }
            if (\array_key_exists('Running', $data)) {
                $object->setRunning($data['Running']);
            }
            if (\array_key_exists('Paused', $data)) {
                $object->setPaused($data['Paused']);
            }
            if (\array_key_exists('Restarting', $data)) {
                $object->setRestarting($data['Restarting']);
            }
            if (\array_key_exists('OOMKilled', $data)) {
                $object->setOOMKilled($data['OOMKilled']);
            }
            if (\array_key_exists('Dead', $data)) {
                $object->setDead($data['Dead']);
            }
            if (\array_key_exists('Pid', $data)) {
                $object->setPid($data['Pid']);
            }
            if (\array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
            }
            if (\array_key_exists('Error', $data)) {
                $object->setError($data['Error']);
            }
            if (\array_key_exists('StartedAt', $data)) {
                $object->setStartedAt($data['StartedAt']);
            }
            if (\array_key_exists('FinishedAt', $data)) {
                $object->setFinishedAt($data['FinishedAt']);
            }
            if (\array_key_exists('Health', $data) && $data['Health'] !== null) {
                $object->setHealth($this->denormalizer->denormalize($data['Health'], \Vendor\Library\Generated\Model\Health::class, 'json', $context));
            }
            elseif (\array_key_exists('Health', $data) && $data['Health'] === null) {
                $object->setHealth(null);
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
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('paused') && null !== $object->getPaused()) {
                $data['Paused'] = $object->getPaused();
            }
            if ($object->isInitialized('restarting') && null !== $object->getRestarting()) {
                $data['Restarting'] = $object->getRestarting();
            }
            if ($object->isInitialized('oOMKilled') && null !== $object->getOOMKilled()) {
                $data['OOMKilled'] = $object->getOOMKilled();
            }
            if ($object->isInitialized('dead') && null !== $object->getDead()) {
                $data['Dead'] = $object->getDead();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['Error'] = $object->getError();
            }
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['StartedAt'] = $object->getStartedAt();
            }
            if ($object->isInitialized('finishedAt') && null !== $object->getFinishedAt()) {
                $data['FinishedAt'] = $object->getFinishedAt();
            }
            if ($object->isInitialized('health') && null !== $object->getHealth()) {
                $data['Health'] = $this->normalizer->normalize($object->getHealth(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerState::class => false];
        }
    }
}