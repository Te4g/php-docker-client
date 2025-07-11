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
    class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\SwarmInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\SwarmInfo::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\SwarmInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NodeID', $data)) {
                $object->setNodeID($data['NodeID']);
            }
            if (\array_key_exists('NodeAddr', $data)) {
                $object->setNodeAddr($data['NodeAddr']);
            }
            if (\array_key_exists('LocalNodeState', $data)) {
                $object->setLocalNodeState($data['LocalNodeState']);
            }
            if (\array_key_exists('ControlAvailable', $data)) {
                $object->setControlAvailable($data['ControlAvailable']);
            }
            if (\array_key_exists('Error', $data)) {
                $object->setError($data['Error']);
            }
            if (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] !== null) {
                $values = [];
                foreach ($data['RemoteManagers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\PeerNode::class, 'json', $context);
                }
                $object->setRemoteManagers($values);
            }
            elseif (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] === null) {
                $object->setRemoteManagers(null);
            }
            if (\array_key_exists('Nodes', $data) && $data['Nodes'] !== null) {
                $object->setNodes($data['Nodes']);
            }
            elseif (\array_key_exists('Nodes', $data) && $data['Nodes'] === null) {
                $object->setNodes(null);
            }
            if (\array_key_exists('Managers', $data) && $data['Managers'] !== null) {
                $object->setManagers($data['Managers']);
            }
            elseif (\array_key_exists('Managers', $data) && $data['Managers'] === null) {
                $object->setManagers(null);
            }
            if (\array_key_exists('Cluster', $data) && $data['Cluster'] !== null) {
                $object->setCluster($this->denormalizer->denormalize($data['Cluster'], \Vendor\Library\Generated\Model\ClusterInfo::class, 'json', $context));
            }
            elseif (\array_key_exists('Cluster', $data) && $data['Cluster'] === null) {
                $object->setCluster(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nodeID') && null !== $object->getNodeID()) {
                $data['NodeID'] = $object->getNodeID();
            }
            if ($object->isInitialized('nodeAddr') && null !== $object->getNodeAddr()) {
                $data['NodeAddr'] = $object->getNodeAddr();
            }
            if ($object->isInitialized('localNodeState') && null !== $object->getLocalNodeState()) {
                $data['LocalNodeState'] = $object->getLocalNodeState();
            }
            if ($object->isInitialized('controlAvailable') && null !== $object->getControlAvailable()) {
                $data['ControlAvailable'] = $object->getControlAvailable();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['Error'] = $object->getError();
            }
            if ($object->isInitialized('remoteManagers') && null !== $object->getRemoteManagers()) {
                $values = [];
                foreach ($object->getRemoteManagers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['RemoteManagers'] = $values;
            }
            if ($object->isInitialized('nodes') && null !== $object->getNodes()) {
                $data['Nodes'] = $object->getNodes();
            }
            if ($object->isInitialized('managers') && null !== $object->getManagers()) {
                $data['Managers'] = $object->getManagers();
            }
            if ($object->isInitialized('cluster') && null !== $object->getCluster()) {
                $data['Cluster'] = $this->normalizer->normalize($object->getCluster(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\SwarmInfo::class => false];
        }
    }
} else {
    class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\SwarmInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\SwarmInfo::class;
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
            $object = new \Vendor\Library\Generated\Model\SwarmInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NodeID', $data)) {
                $object->setNodeID($data['NodeID']);
            }
            if (\array_key_exists('NodeAddr', $data)) {
                $object->setNodeAddr($data['NodeAddr']);
            }
            if (\array_key_exists('LocalNodeState', $data)) {
                $object->setLocalNodeState($data['LocalNodeState']);
            }
            if (\array_key_exists('ControlAvailable', $data)) {
                $object->setControlAvailable($data['ControlAvailable']);
            }
            if (\array_key_exists('Error', $data)) {
                $object->setError($data['Error']);
            }
            if (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] !== null) {
                $values = [];
                foreach ($data['RemoteManagers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\PeerNode::class, 'json', $context);
                }
                $object->setRemoteManagers($values);
            }
            elseif (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] === null) {
                $object->setRemoteManagers(null);
            }
            if (\array_key_exists('Nodes', $data) && $data['Nodes'] !== null) {
                $object->setNodes($data['Nodes']);
            }
            elseif (\array_key_exists('Nodes', $data) && $data['Nodes'] === null) {
                $object->setNodes(null);
            }
            if (\array_key_exists('Managers', $data) && $data['Managers'] !== null) {
                $object->setManagers($data['Managers']);
            }
            elseif (\array_key_exists('Managers', $data) && $data['Managers'] === null) {
                $object->setManagers(null);
            }
            if (\array_key_exists('Cluster', $data) && $data['Cluster'] !== null) {
                $object->setCluster($this->denormalizer->denormalize($data['Cluster'], \Vendor\Library\Generated\Model\ClusterInfo::class, 'json', $context));
            }
            elseif (\array_key_exists('Cluster', $data) && $data['Cluster'] === null) {
                $object->setCluster(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('nodeID') && null !== $object->getNodeID()) {
                $data['NodeID'] = $object->getNodeID();
            }
            if ($object->isInitialized('nodeAddr') && null !== $object->getNodeAddr()) {
                $data['NodeAddr'] = $object->getNodeAddr();
            }
            if ($object->isInitialized('localNodeState') && null !== $object->getLocalNodeState()) {
                $data['LocalNodeState'] = $object->getLocalNodeState();
            }
            if ($object->isInitialized('controlAvailable') && null !== $object->getControlAvailable()) {
                $data['ControlAvailable'] = $object->getControlAvailable();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['Error'] = $object->getError();
            }
            if ($object->isInitialized('remoteManagers') && null !== $object->getRemoteManagers()) {
                $values = [];
                foreach ($object->getRemoteManagers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['RemoteManagers'] = $values;
            }
            if ($object->isInitialized('nodes') && null !== $object->getNodes()) {
                $data['Nodes'] = $object->getNodes();
            }
            if ($object->isInitialized('managers') && null !== $object->getManagers()) {
                $data['Managers'] = $object->getManagers();
            }
            if ($object->isInitialized('cluster') && null !== $object->getCluster()) {
                $data['Cluster'] = $this->normalizer->normalize($object->getCluster(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\SwarmInfo::class => false];
        }
    }
}