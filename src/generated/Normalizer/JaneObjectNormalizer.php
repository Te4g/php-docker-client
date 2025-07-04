<?php

namespace Vendor\Library\Generated\Normalizer;

use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Vendor\Library\Generated\Model\Port::class => \Vendor\Library\Generated\Normalizer\PortNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountPoint::class => \Vendor\Library\Generated\Normalizer\MountPointNormalizer::class,
            
            \Vendor\Library\Generated\Model\DeviceMapping::class => \Vendor\Library\Generated\Normalizer\DeviceMappingNormalizer::class,
            
            \Vendor\Library\Generated\Model\DeviceRequest::class => \Vendor\Library\Generated\Normalizer\DeviceRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ThrottleDevice::class => \Vendor\Library\Generated\Normalizer\ThrottleDeviceNormalizer::class,
            
            \Vendor\Library\Generated\Model\Mount::class => \Vendor\Library\Generated\Normalizer\MountNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountBindOptions::class => \Vendor\Library\Generated\Normalizer\MountBindOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountVolumeOptions::class => \Vendor\Library\Generated\Normalizer\MountVolumeOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountVolumeOptionsDriverConfig::class => \Vendor\Library\Generated\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountImageOptions::class => \Vendor\Library\Generated\Normalizer\MountImageOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountTmpfsOptions::class => \Vendor\Library\Generated\Normalizer\MountTmpfsOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\RestartPolicy::class => \Vendor\Library\Generated\Normalizer\RestartPolicyNormalizer::class,
            
            \Vendor\Library\Generated\Model\Resources::class => \Vendor\Library\Generated\Normalizer\ResourcesNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class => \Vendor\Library\Generated\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResourcesUlimitsItem::class => \Vendor\Library\Generated\Normalizer\ResourcesUlimitsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\Limit::class => \Vendor\Library\Generated\Normalizer\LimitNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResourceObject::class => \Vendor\Library\Generated\Normalizer\ResourceObjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\GenericResourcesItem::class => \Vendor\Library\Generated\Normalizer\GenericResourcesItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class => \Vendor\Library\Generated\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class => \Vendor\Library\Generated\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\HealthConfig::class => \Vendor\Library\Generated\Normalizer\HealthConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\Health::class => \Vendor\Library\Generated\Normalizer\HealthNormalizer::class,
            
            \Vendor\Library\Generated\Model\HealthcheckResult::class => \Vendor\Library\Generated\Normalizer\HealthcheckResultNormalizer::class,
            
            \Vendor\Library\Generated\Model\HostConfig::class => \Vendor\Library\Generated\Normalizer\HostConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\HostConfigLogConfig::class => \Vendor\Library\Generated\Normalizer\HostConfigLogConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerConfig::class => \Vendor\Library\Generated\Normalizer\ContainerConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageConfig::class => \Vendor\Library\Generated\Normalizer\ImageConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkingConfig::class => \Vendor\Library\Generated\Normalizer\NetworkingConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkSettings::class => \Vendor\Library\Generated\Normalizer\NetworkSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\Address::class => \Vendor\Library\Generated\Normalizer\AddressNormalizer::class,
            
            \Vendor\Library\Generated\Model\PortBinding::class => \Vendor\Library\Generated\Normalizer\PortBindingNormalizer::class,
            
            \Vendor\Library\Generated\Model\DriverData::class => \Vendor\Library\Generated\Normalizer\DriverDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\FilesystemChange::class => \Vendor\Library\Generated\Normalizer\FilesystemChangeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageInspect::class => \Vendor\Library\Generated\Normalizer\ImageInspectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageInspectRootFS::class => \Vendor\Library\Generated\Normalizer\ImageInspectRootFSNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageInspectMetadata::class => \Vendor\Library\Generated\Normalizer\ImageInspectMetadataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageSummary::class => \Vendor\Library\Generated\Normalizer\ImageSummaryNormalizer::class,
            
            \Vendor\Library\Generated\Model\AuthConfig::class => \Vendor\Library\Generated\Normalizer\AuthConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProcessConfig::class => \Vendor\Library\Generated\Normalizer\ProcessConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\Volume::class => \Vendor\Library\Generated\Normalizer\VolumeNormalizer::class,
            
            \Vendor\Library\Generated\Model\VolumeUsageData::class => \Vendor\Library\Generated\Normalizer\VolumeUsageDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\VolumeCreateOptions::class => \Vendor\Library\Generated\Normalizer\VolumeCreateOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\VolumeListResponse::class => \Vendor\Library\Generated\Normalizer\VolumeListResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\Network::class => \Vendor\Library\Generated\Normalizer\NetworkNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConfigReference::class => \Vendor\Library\Generated\Normalizer\ConfigReferenceNormalizer::class,
            
            \Vendor\Library\Generated\Model\IPAM::class => \Vendor\Library\Generated\Normalizer\IPAMNormalizer::class,
            
            \Vendor\Library\Generated\Model\IPAMConfig::class => \Vendor\Library\Generated\Normalizer\IPAMConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkContainer::class => \Vendor\Library\Generated\Normalizer\NetworkContainerNormalizer::class,
            
            \Vendor\Library\Generated\Model\PeerInfo::class => \Vendor\Library\Generated\Normalizer\PeerInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkCreateResponse::class => \Vendor\Library\Generated\Normalizer\NetworkCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BuildInfo::class => \Vendor\Library\Generated\Normalizer\BuildInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\BuildCache::class => \Vendor\Library\Generated\Normalizer\BuildCacheNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageID::class => \Vendor\Library\Generated\Normalizer\ImageIDNormalizer::class,
            
            \Vendor\Library\Generated\Model\CreateImageInfo::class => \Vendor\Library\Generated\Normalizer\CreateImageInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\PushImageInfo::class => \Vendor\Library\Generated\Normalizer\PushImageInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\DeviceInfo::class => \Vendor\Library\Generated\Normalizer\DeviceInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\ErrorDetail::class => \Vendor\Library\Generated\Normalizer\ErrorDetailNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProgressDetail::class => \Vendor\Library\Generated\Normalizer\ProgressDetailNormalizer::class,
            
            \Vendor\Library\Generated\Model\ErrorResponse::class => \Vendor\Library\Generated\Normalizer\ErrorResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\IDResponse::class => \Vendor\Library\Generated\Normalizer\IDResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointSettings::class => \Vendor\Library\Generated\Normalizer\EndpointSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointIPAMConfig::class => \Vendor\Library\Generated\Normalizer\EndpointIPAMConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginMount::class => \Vendor\Library\Generated\Normalizer\PluginMountNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginDevice::class => \Vendor\Library\Generated\Normalizer\PluginDeviceNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginEnv::class => \Vendor\Library\Generated\Normalizer\PluginEnvNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginInterfaceType::class => \Vendor\Library\Generated\Normalizer\PluginInterfaceTypeNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginPrivilege::class => \Vendor\Library\Generated\Normalizer\PluginPrivilegeNormalizer::class,
            
            \Vendor\Library\Generated\Model\Plugin::class => \Vendor\Library\Generated\Normalizer\PluginNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginSettings::class => \Vendor\Library\Generated\Normalizer\PluginSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfig::class => \Vendor\Library\Generated\Normalizer\PluginConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigInterface::class => \Vendor\Library\Generated\Normalizer\PluginConfigInterfaceNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigUser::class => \Vendor\Library\Generated\Normalizer\PluginConfigUserNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigNetwork::class => \Vendor\Library\Generated\Normalizer\PluginConfigNetworkNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigLinux::class => \Vendor\Library\Generated\Normalizer\PluginConfigLinuxNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigArgs::class => \Vendor\Library\Generated\Normalizer\PluginConfigArgsNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigRootfs::class => \Vendor\Library\Generated\Normalizer\PluginConfigRootfsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ObjectVersion::class => \Vendor\Library\Generated\Normalizer\ObjectVersionNormalizer::class,
            
            \Vendor\Library\Generated\Model\NodeSpec::class => \Vendor\Library\Generated\Normalizer\NodeSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\Node::class => \Vendor\Library\Generated\Normalizer\NodeNormalizer::class,
            
            \Vendor\Library\Generated\Model\NodeDescription::class => \Vendor\Library\Generated\Normalizer\NodeDescriptionNormalizer::class,
            
            \Vendor\Library\Generated\Model\Platform::class => \Vendor\Library\Generated\Normalizer\PlatformNormalizer::class,
            
            \Vendor\Library\Generated\Model\EngineDescription::class => \Vendor\Library\Generated\Normalizer\EngineDescriptionNormalizer::class,
            
            \Vendor\Library\Generated\Model\EngineDescriptionPluginsItem::class => \Vendor\Library\Generated\Normalizer\EngineDescriptionPluginsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TLSInfo::class => \Vendor\Library\Generated\Normalizer\TLSInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\NodeStatus::class => \Vendor\Library\Generated\Normalizer\NodeStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\ManagerStatus::class => \Vendor\Library\Generated\Normalizer\ManagerStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpec::class => \Vendor\Library\Generated\Normalizer\SwarmSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecOrchestration::class => \Vendor\Library\Generated\Normalizer\SwarmSpecOrchestrationNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecRaft::class => \Vendor\Library\Generated\Normalizer\SwarmSpecRaftNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecDispatcher::class => \Vendor\Library\Generated\Normalizer\SwarmSpecDispatcherNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class => \Vendor\Library\Generated\Normalizer\SwarmSpecCAConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => \Vendor\Library\Generated\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecEncryptionConfig::class => \Vendor\Library\Generated\Normalizer\SwarmSpecEncryptionConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecTaskDefaults::class => \Vendor\Library\Generated\Normalizer\SwarmSpecTaskDefaultsNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class => \Vendor\Library\Generated\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterInfo::class => \Vendor\Library\Generated\Normalizer\ClusterInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\JoinTokens::class => \Vendor\Library\Generated\Normalizer\JoinTokensNormalizer::class,
            
            \Vendor\Library\Generated\Model\Swarm::class => \Vendor\Library\Generated\Normalizer\SwarmNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecPluginSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesSeccompNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesAppArmorNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecUlimitsItem::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecUlimitsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecNetworkAttachmentSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecResources::class => \Vendor\Library\Generated\Normalizer\TaskSpecResourcesNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecRestartPolicy::class => \Vendor\Library\Generated\Normalizer\TaskSpecRestartPolicyNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecPlacement::class => \Vendor\Library\Generated\Normalizer\TaskSpecPlacementNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class => \Vendor\Library\Generated\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class => \Vendor\Library\Generated\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecLogDriver::class => \Vendor\Library\Generated\Normalizer\TaskSpecLogDriverNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerStatus::class => \Vendor\Library\Generated\Normalizer\ContainerStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\PortStatus::class => \Vendor\Library\Generated\Normalizer\PortStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskStatus::class => \Vendor\Library\Generated\Normalizer\TaskStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\Task::class => \Vendor\Library\Generated\Normalizer\TaskNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpec::class => \Vendor\Library\Generated\Normalizer\ServiceSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecMode::class => \Vendor\Library\Generated\Normalizer\ServiceSpecModeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecModeReplicated::class => \Vendor\Library\Generated\Normalizer\ServiceSpecModeReplicatedNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecModeReplicatedJob::class => \Vendor\Library\Generated\Normalizer\ServiceSpecModeReplicatedJobNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecUpdateConfig::class => \Vendor\Library\Generated\Normalizer\ServiceSpecUpdateConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecRollbackConfig::class => \Vendor\Library\Generated\Normalizer\ServiceSpecRollbackConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointPortConfig::class => \Vendor\Library\Generated\Normalizer\EndpointPortConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointSpec::class => \Vendor\Library\Generated\Normalizer\EndpointSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\Service::class => \Vendor\Library\Generated\Normalizer\ServiceNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceEndpoint::class => \Vendor\Library\Generated\Normalizer\ServiceEndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class => \Vendor\Library\Generated\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceUpdateStatus::class => \Vendor\Library\Generated\Normalizer\ServiceUpdateStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceServiceStatus::class => \Vendor\Library\Generated\Normalizer\ServiceServiceStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceJobStatus::class => \Vendor\Library\Generated\Normalizer\ServiceJobStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageDeleteResponseItem::class => \Vendor\Library\Generated\Normalizer\ImageDeleteResponseItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceCreateResponse::class => \Vendor\Library\Generated\Normalizer\ServiceCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceUpdateResponse::class => \Vendor\Library\Generated\Normalizer\ServiceUpdateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerInspectResponse::class => \Vendor\Library\Generated\Normalizer\ContainerInspectResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerSummary::class => \Vendor\Library\Generated\Normalizer\ContainerSummaryNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerSummaryHostConfig::class => \Vendor\Library\Generated\Normalizer\ContainerSummaryHostConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerSummaryNetworkSettings::class => \Vendor\Library\Generated\Normalizer\ContainerSummaryNetworkSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\Driver::class => \Vendor\Library\Generated\Normalizer\DriverNormalizer::class,
            
            \Vendor\Library\Generated\Model\SecretSpec::class => \Vendor\Library\Generated\Normalizer\SecretSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\Secret::class => \Vendor\Library\Generated\Normalizer\SecretNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConfigSpec::class => \Vendor\Library\Generated\Normalizer\ConfigSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\Config::class => \Vendor\Library\Generated\Normalizer\ConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerState::class => \Vendor\Library\Generated\Normalizer\ContainerStateNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerCreateResponse::class => \Vendor\Library\Generated\Normalizer\ContainerCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerUpdateResponse::class => \Vendor\Library\Generated\Normalizer\ContainerUpdateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerStatsResponse::class => \Vendor\Library\Generated\Normalizer\ContainerStatsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerBlkioStats::class => \Vendor\Library\Generated\Normalizer\ContainerBlkioStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class => \Vendor\Library\Generated\Normalizer\ContainerBlkioStatEntryNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerCPUStats::class => \Vendor\Library\Generated\Normalizer\ContainerCPUStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerCPUUsage::class => \Vendor\Library\Generated\Normalizer\ContainerCPUUsageNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerPidsStats::class => \Vendor\Library\Generated\Normalizer\ContainerPidsStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerThrottlingData::class => \Vendor\Library\Generated\Normalizer\ContainerThrottlingDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerMemoryStats::class => \Vendor\Library\Generated\Normalizer\ContainerMemoryStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerNetworkStats::class => \Vendor\Library\Generated\Normalizer\ContainerNetworkStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerStorageStats::class => \Vendor\Library\Generated\Normalizer\ContainerStorageStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerTopResponse::class => \Vendor\Library\Generated\Normalizer\ContainerTopResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerWaitResponse::class => \Vendor\Library\Generated\Normalizer\ContainerWaitResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerWaitExitError::class => \Vendor\Library\Generated\Normalizer\ContainerWaitExitErrorNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemVersion::class => \Vendor\Library\Generated\Normalizer\SystemVersionNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemVersionPlatform::class => \Vendor\Library\Generated\Normalizer\SystemVersionPlatformNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemVersionComponentsItem::class => \Vendor\Library\Generated\Normalizer\SystemVersionComponentsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemInfo::class => \Vendor\Library\Generated\Normalizer\SystemInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => \Vendor\Library\Generated\Normalizer\SystemInfoDefaultAddressPoolsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerdInfo::class => \Vendor\Library\Generated\Normalizer\ContainerdInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerdInfoNamespaces::class => \Vendor\Library\Generated\Normalizer\ContainerdInfoNamespacesNormalizer::class,
            
            \Vendor\Library\Generated\Model\FirewallInfo::class => \Vendor\Library\Generated\Normalizer\FirewallInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginsInfo::class => \Vendor\Library\Generated\Normalizer\PluginsInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\RegistryServiceConfig::class => \Vendor\Library\Generated\Normalizer\RegistryServiceConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\IndexInfo::class => \Vendor\Library\Generated\Normalizer\IndexInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\Runtime::class => \Vendor\Library\Generated\Normalizer\RuntimeNormalizer::class,
            
            \Vendor\Library\Generated\Model\Commit::class => \Vendor\Library\Generated\Normalizer\CommitNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmInfo::class => \Vendor\Library\Generated\Normalizer\SwarmInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\PeerNode::class => \Vendor\Library\Generated\Normalizer\PeerNodeNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkAttachmentConfig::class => \Vendor\Library\Generated\Normalizer\NetworkAttachmentConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\EventActor::class => \Vendor\Library\Generated\Normalizer\EventActorNormalizer::class,
            
            \Vendor\Library\Generated\Model\EventMessage::class => \Vendor\Library\Generated\Normalizer\EventMessageNormalizer::class,
            
            \Vendor\Library\Generated\Model\OCIDescriptor::class => \Vendor\Library\Generated\Normalizer\OCIDescriptorNormalizer::class,
            
            \Vendor\Library\Generated\Model\OCIPlatform::class => \Vendor\Library\Generated\Normalizer\OCIPlatformNormalizer::class,
            
            \Vendor\Library\Generated\Model\DistributionInspect::class => \Vendor\Library\Generated\Normalizer\DistributionInspectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolume::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeInfo::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumePublishStatusItem::class => \Vendor\Library\Generated\Normalizer\ClusterVolumePublishStatusItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpec::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessMode::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecAccessModeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecAccessModeSecretsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummary::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummaryNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummarySize::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummarySizeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummaryImageData::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummaryImageDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummaryImageDataSize::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummaryImageDataSizeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummaryAttestationData::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummaryAttestationDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainersCreatePostBody::class => \Vendor\Library\Generated\Normalizer\ContainersCreatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainersIdUpdatePostBody::class => \Vendor\Library\Generated\Normalizer\ContainersIdUpdatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainersPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\ContainersPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\BuildPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\BuildPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ImagesNameHistoryGetResponse200Item::class => \Vendor\Library\Generated\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImagesSearchGetResponse200Item::class => \Vendor\Library\Generated\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImagesPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\ImagesPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\AuthPostResponse200::class => \Vendor\Library\Generated\Normalizer\AuthPostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\SystemDfGetResponse200::class => \Vendor\Library\Generated\Normalizer\SystemDfGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ContainersIdExecPostBody::class => \Vendor\Library\Generated\Normalizer\ContainersIdExecPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ExecIdStartPostBody::class => \Vendor\Library\Generated\Normalizer\ExecIdStartPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class => \Vendor\Library\Generated\Normalizer\ExecIdJsonGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\VolumesNamePutBody::class => \Vendor\Library\Generated\Normalizer\VolumesNamePutBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\VolumesPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\VolumesPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\NetworksCreatePostBody::class => \Vendor\Library\Generated\Normalizer\NetworksCreatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworksIdConnectPostBody::class => \Vendor\Library\Generated\Normalizer\NetworksIdConnectPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworksIdDisconnectPostBody::class => \Vendor\Library\Generated\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworksPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\NetworksPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmInitPostBody::class => \Vendor\Library\Generated\Normalizer\SwarmInitPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmJoinPostBody::class => \Vendor\Library\Generated\Normalizer\SwarmJoinPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmUnlockkeyGetResponse200::class => \Vendor\Library\Generated\Normalizer\SwarmUnlockkeyGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmUnlockPostBody::class => \Vendor\Library\Generated\Normalizer\SwarmUnlockPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServicesCreatePostBody::class => \Vendor\Library\Generated\Normalizer\ServicesCreatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class => \Vendor\Library\Generated\Normalizer\ServicesIdUpdatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\SecretsCreatePostBody::class => \Vendor\Library\Generated\Normalizer\SecretsCreatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConfigsCreatePostBody::class => \Vendor\Library\Generated\Normalizer\ConfigsCreatePostBodyNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Vendor\Library\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Vendor\Library\Generated\Model\Port::class => false,
                \Vendor\Library\Generated\Model\MountPoint::class => false,
                \Vendor\Library\Generated\Model\DeviceMapping::class => false,
                \Vendor\Library\Generated\Model\DeviceRequest::class => false,
                \Vendor\Library\Generated\Model\ThrottleDevice::class => false,
                \Vendor\Library\Generated\Model\Mount::class => false,
                \Vendor\Library\Generated\Model\MountBindOptions::class => false,
                \Vendor\Library\Generated\Model\MountVolumeOptions::class => false,
                \Vendor\Library\Generated\Model\MountVolumeOptionsDriverConfig::class => false,
                \Vendor\Library\Generated\Model\MountImageOptions::class => false,
                \Vendor\Library\Generated\Model\MountTmpfsOptions::class => false,
                \Vendor\Library\Generated\Model\RestartPolicy::class => false,
                \Vendor\Library\Generated\Model\Resources::class => false,
                \Vendor\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class => false,
                \Vendor\Library\Generated\Model\ResourcesUlimitsItem::class => false,
                \Vendor\Library\Generated\Model\Limit::class => false,
                \Vendor\Library\Generated\Model\ResourceObject::class => false,
                \Vendor\Library\Generated\Model\GenericResourcesItem::class => false,
                \Vendor\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class => false,
                \Vendor\Library\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class => false,
                \Vendor\Library\Generated\Model\HealthConfig::class => false,
                \Vendor\Library\Generated\Model\Health::class => false,
                \Vendor\Library\Generated\Model\HealthcheckResult::class => false,
                \Vendor\Library\Generated\Model\HostConfig::class => false,
                \Vendor\Library\Generated\Model\HostConfigLogConfig::class => false,
                \Vendor\Library\Generated\Model\ContainerConfig::class => false,
                \Vendor\Library\Generated\Model\ImageConfig::class => false,
                \Vendor\Library\Generated\Model\NetworkingConfig::class => false,
                \Vendor\Library\Generated\Model\NetworkSettings::class => false,
                \Vendor\Library\Generated\Model\Address::class => false,
                \Vendor\Library\Generated\Model\PortBinding::class => false,
                \Vendor\Library\Generated\Model\DriverData::class => false,
                \Vendor\Library\Generated\Model\FilesystemChange::class => false,
                \Vendor\Library\Generated\Model\ImageInspect::class => false,
                \Vendor\Library\Generated\Model\ImageInspectRootFS::class => false,
                \Vendor\Library\Generated\Model\ImageInspectMetadata::class => false,
                \Vendor\Library\Generated\Model\ImageSummary::class => false,
                \Vendor\Library\Generated\Model\AuthConfig::class => false,
                \Vendor\Library\Generated\Model\ProcessConfig::class => false,
                \Vendor\Library\Generated\Model\Volume::class => false,
                \Vendor\Library\Generated\Model\VolumeUsageData::class => false,
                \Vendor\Library\Generated\Model\VolumeCreateOptions::class => false,
                \Vendor\Library\Generated\Model\VolumeListResponse::class => false,
                \Vendor\Library\Generated\Model\Network::class => false,
                \Vendor\Library\Generated\Model\ConfigReference::class => false,
                \Vendor\Library\Generated\Model\IPAM::class => false,
                \Vendor\Library\Generated\Model\IPAMConfig::class => false,
                \Vendor\Library\Generated\Model\NetworkContainer::class => false,
                \Vendor\Library\Generated\Model\PeerInfo::class => false,
                \Vendor\Library\Generated\Model\NetworkCreateResponse::class => false,
                \Vendor\Library\Generated\Model\BuildInfo::class => false,
                \Vendor\Library\Generated\Model\BuildCache::class => false,
                \Vendor\Library\Generated\Model\ImageID::class => false,
                \Vendor\Library\Generated\Model\CreateImageInfo::class => false,
                \Vendor\Library\Generated\Model\PushImageInfo::class => false,
                \Vendor\Library\Generated\Model\DeviceInfo::class => false,
                \Vendor\Library\Generated\Model\ErrorDetail::class => false,
                \Vendor\Library\Generated\Model\ProgressDetail::class => false,
                \Vendor\Library\Generated\Model\ErrorResponse::class => false,
                \Vendor\Library\Generated\Model\IDResponse::class => false,
                \Vendor\Library\Generated\Model\EndpointSettings::class => false,
                \Vendor\Library\Generated\Model\EndpointIPAMConfig::class => false,
                \Vendor\Library\Generated\Model\PluginMount::class => false,
                \Vendor\Library\Generated\Model\PluginDevice::class => false,
                \Vendor\Library\Generated\Model\PluginEnv::class => false,
                \Vendor\Library\Generated\Model\PluginInterfaceType::class => false,
                \Vendor\Library\Generated\Model\PluginPrivilege::class => false,
                \Vendor\Library\Generated\Model\Plugin::class => false,
                \Vendor\Library\Generated\Model\PluginSettings::class => false,
                \Vendor\Library\Generated\Model\PluginConfig::class => false,
                \Vendor\Library\Generated\Model\PluginConfigInterface::class => false,
                \Vendor\Library\Generated\Model\PluginConfigUser::class => false,
                \Vendor\Library\Generated\Model\PluginConfigNetwork::class => false,
                \Vendor\Library\Generated\Model\PluginConfigLinux::class => false,
                \Vendor\Library\Generated\Model\PluginConfigArgs::class => false,
                \Vendor\Library\Generated\Model\PluginConfigRootfs::class => false,
                \Vendor\Library\Generated\Model\ObjectVersion::class => false,
                \Vendor\Library\Generated\Model\NodeSpec::class => false,
                \Vendor\Library\Generated\Model\Node::class => false,
                \Vendor\Library\Generated\Model\NodeDescription::class => false,
                \Vendor\Library\Generated\Model\Platform::class => false,
                \Vendor\Library\Generated\Model\EngineDescription::class => false,
                \Vendor\Library\Generated\Model\EngineDescriptionPluginsItem::class => false,
                \Vendor\Library\Generated\Model\TLSInfo::class => false,
                \Vendor\Library\Generated\Model\NodeStatus::class => false,
                \Vendor\Library\Generated\Model\ManagerStatus::class => false,
                \Vendor\Library\Generated\Model\SwarmSpec::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecOrchestration::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecRaft::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecDispatcher::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecEncryptionConfig::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecTaskDefaults::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class => false,
                \Vendor\Library\Generated\Model\ClusterInfo::class => false,
                \Vendor\Library\Generated\Model\JoinTokens::class => false,
                \Vendor\Library\Generated\Model\Swarm::class => false,
                \Vendor\Library\Generated\Model\TaskSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecUlimitsItem::class => false,
                \Vendor\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecResources::class => false,
                \Vendor\Library\Generated\Model\TaskSpecRestartPolicy::class => false,
                \Vendor\Library\Generated\Model\TaskSpecPlacement::class => false,
                \Vendor\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class => false,
                \Vendor\Library\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class => false,
                \Vendor\Library\Generated\Model\TaskSpecLogDriver::class => false,
                \Vendor\Library\Generated\Model\ContainerStatus::class => false,
                \Vendor\Library\Generated\Model\PortStatus::class => false,
                \Vendor\Library\Generated\Model\TaskStatus::class => false,
                \Vendor\Library\Generated\Model\Task::class => false,
                \Vendor\Library\Generated\Model\ServiceSpec::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecMode::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecModeReplicated::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecModeReplicatedJob::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecUpdateConfig::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecRollbackConfig::class => false,
                \Vendor\Library\Generated\Model\EndpointPortConfig::class => false,
                \Vendor\Library\Generated\Model\EndpointSpec::class => false,
                \Vendor\Library\Generated\Model\Service::class => false,
                \Vendor\Library\Generated\Model\ServiceEndpoint::class => false,
                \Vendor\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class => false,
                \Vendor\Library\Generated\Model\ServiceUpdateStatus::class => false,
                \Vendor\Library\Generated\Model\ServiceServiceStatus::class => false,
                \Vendor\Library\Generated\Model\ServiceJobStatus::class => false,
                \Vendor\Library\Generated\Model\ImageDeleteResponseItem::class => false,
                \Vendor\Library\Generated\Model\ServiceCreateResponse::class => false,
                \Vendor\Library\Generated\Model\ServiceUpdateResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerInspectResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerSummary::class => false,
                \Vendor\Library\Generated\Model\ContainerSummaryHostConfig::class => false,
                \Vendor\Library\Generated\Model\ContainerSummaryNetworkSettings::class => false,
                \Vendor\Library\Generated\Model\Driver::class => false,
                \Vendor\Library\Generated\Model\SecretSpec::class => false,
                \Vendor\Library\Generated\Model\Secret::class => false,
                \Vendor\Library\Generated\Model\ConfigSpec::class => false,
                \Vendor\Library\Generated\Model\Config::class => false,
                \Vendor\Library\Generated\Model\ContainerState::class => false,
                \Vendor\Library\Generated\Model\ContainerCreateResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerUpdateResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerStatsResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerBlkioStats::class => false,
                \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class => false,
                \Vendor\Library\Generated\Model\ContainerCPUStats::class => false,
                \Vendor\Library\Generated\Model\ContainerCPUUsage::class => false,
                \Vendor\Library\Generated\Model\ContainerPidsStats::class => false,
                \Vendor\Library\Generated\Model\ContainerThrottlingData::class => false,
                \Vendor\Library\Generated\Model\ContainerMemoryStats::class => false,
                \Vendor\Library\Generated\Model\ContainerNetworkStats::class => false,
                \Vendor\Library\Generated\Model\ContainerStorageStats::class => false,
                \Vendor\Library\Generated\Model\ContainerTopResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerWaitResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerWaitExitError::class => false,
                \Vendor\Library\Generated\Model\SystemVersion::class => false,
                \Vendor\Library\Generated\Model\SystemVersionPlatform::class => false,
                \Vendor\Library\Generated\Model\SystemVersionComponentsItem::class => false,
                \Vendor\Library\Generated\Model\SystemInfo::class => false,
                \Vendor\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => false,
                \Vendor\Library\Generated\Model\ContainerdInfo::class => false,
                \Vendor\Library\Generated\Model\ContainerdInfoNamespaces::class => false,
                \Vendor\Library\Generated\Model\FirewallInfo::class => false,
                \Vendor\Library\Generated\Model\PluginsInfo::class => false,
                \Vendor\Library\Generated\Model\RegistryServiceConfig::class => false,
                \Vendor\Library\Generated\Model\IndexInfo::class => false,
                \Vendor\Library\Generated\Model\Runtime::class => false,
                \Vendor\Library\Generated\Model\Commit::class => false,
                \Vendor\Library\Generated\Model\SwarmInfo::class => false,
                \Vendor\Library\Generated\Model\PeerNode::class => false,
                \Vendor\Library\Generated\Model\NetworkAttachmentConfig::class => false,
                \Vendor\Library\Generated\Model\EventActor::class => false,
                \Vendor\Library\Generated\Model\EventMessage::class => false,
                \Vendor\Library\Generated\Model\OCIDescriptor::class => false,
                \Vendor\Library\Generated\Model\OCIPlatform::class => false,
                \Vendor\Library\Generated\Model\DistributionInspect::class => false,
                \Vendor\Library\Generated\Model\ClusterVolume::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeInfo::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumePublishStatusItem::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpec::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessMode::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummary::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummarySize::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummaryImageData::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummaryImageDataSize::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummaryAttestationData::class => false,
                \Vendor\Library\Generated\Model\ContainersCreatePostBody::class => false,
                \Vendor\Library\Generated\Model\ContainersIdUpdatePostBody::class => false,
                \Vendor\Library\Generated\Model\ContainersPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\BuildPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\ImagesNameHistoryGetResponse200Item::class => false,
                \Vendor\Library\Generated\Model\ImagesSearchGetResponse200Item::class => false,
                \Vendor\Library\Generated\Model\ImagesPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\AuthPostResponse200::class => false,
                \Vendor\Library\Generated\Model\SystemDfGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ContainersIdExecPostBody::class => false,
                \Vendor\Library\Generated\Model\ExecIdStartPostBody::class => false,
                \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class => false,
                \Vendor\Library\Generated\Model\VolumesNamePutBody::class => false,
                \Vendor\Library\Generated\Model\VolumesPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\NetworksCreatePostBody::class => false,
                \Vendor\Library\Generated\Model\NetworksIdConnectPostBody::class => false,
                \Vendor\Library\Generated\Model\NetworksIdDisconnectPostBody::class => false,
                \Vendor\Library\Generated\Model\NetworksPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\SwarmInitPostBody::class => false,
                \Vendor\Library\Generated\Model\SwarmJoinPostBody::class => false,
                \Vendor\Library\Generated\Model\SwarmUnlockkeyGetResponse200::class => false,
                \Vendor\Library\Generated\Model\SwarmUnlockPostBody::class => false,
                \Vendor\Library\Generated\Model\ServicesCreatePostBody::class => false,
                \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class => false,
                \Vendor\Library\Generated\Model\SecretsCreatePostBody::class => false,
                \Vendor\Library\Generated\Model\ConfigsCreatePostBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Vendor\Library\Generated\Model\Port::class => \Vendor\Library\Generated\Normalizer\PortNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountPoint::class => \Vendor\Library\Generated\Normalizer\MountPointNormalizer::class,
            
            \Vendor\Library\Generated\Model\DeviceMapping::class => \Vendor\Library\Generated\Normalizer\DeviceMappingNormalizer::class,
            
            \Vendor\Library\Generated\Model\DeviceRequest::class => \Vendor\Library\Generated\Normalizer\DeviceRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ThrottleDevice::class => \Vendor\Library\Generated\Normalizer\ThrottleDeviceNormalizer::class,
            
            \Vendor\Library\Generated\Model\Mount::class => \Vendor\Library\Generated\Normalizer\MountNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountBindOptions::class => \Vendor\Library\Generated\Normalizer\MountBindOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountVolumeOptions::class => \Vendor\Library\Generated\Normalizer\MountVolumeOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountVolumeOptionsDriverConfig::class => \Vendor\Library\Generated\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountImageOptions::class => \Vendor\Library\Generated\Normalizer\MountImageOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\MountTmpfsOptions::class => \Vendor\Library\Generated\Normalizer\MountTmpfsOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\RestartPolicy::class => \Vendor\Library\Generated\Normalizer\RestartPolicyNormalizer::class,
            
            \Vendor\Library\Generated\Model\Resources::class => \Vendor\Library\Generated\Normalizer\ResourcesNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class => \Vendor\Library\Generated\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResourcesUlimitsItem::class => \Vendor\Library\Generated\Normalizer\ResourcesUlimitsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\Limit::class => \Vendor\Library\Generated\Normalizer\LimitNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResourceObject::class => \Vendor\Library\Generated\Normalizer\ResourceObjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\GenericResourcesItem::class => \Vendor\Library\Generated\Normalizer\GenericResourcesItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class => \Vendor\Library\Generated\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class => \Vendor\Library\Generated\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\HealthConfig::class => \Vendor\Library\Generated\Normalizer\HealthConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\Health::class => \Vendor\Library\Generated\Normalizer\HealthNormalizer::class,
            
            \Vendor\Library\Generated\Model\HealthcheckResult::class => \Vendor\Library\Generated\Normalizer\HealthcheckResultNormalizer::class,
            
            \Vendor\Library\Generated\Model\HostConfig::class => \Vendor\Library\Generated\Normalizer\HostConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\HostConfigLogConfig::class => \Vendor\Library\Generated\Normalizer\HostConfigLogConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerConfig::class => \Vendor\Library\Generated\Normalizer\ContainerConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageConfig::class => \Vendor\Library\Generated\Normalizer\ImageConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkingConfig::class => \Vendor\Library\Generated\Normalizer\NetworkingConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkSettings::class => \Vendor\Library\Generated\Normalizer\NetworkSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\Address::class => \Vendor\Library\Generated\Normalizer\AddressNormalizer::class,
            
            \Vendor\Library\Generated\Model\PortBinding::class => \Vendor\Library\Generated\Normalizer\PortBindingNormalizer::class,
            
            \Vendor\Library\Generated\Model\DriverData::class => \Vendor\Library\Generated\Normalizer\DriverDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\FilesystemChange::class => \Vendor\Library\Generated\Normalizer\FilesystemChangeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageInspect::class => \Vendor\Library\Generated\Normalizer\ImageInspectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageInspectRootFS::class => \Vendor\Library\Generated\Normalizer\ImageInspectRootFSNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageInspectMetadata::class => \Vendor\Library\Generated\Normalizer\ImageInspectMetadataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageSummary::class => \Vendor\Library\Generated\Normalizer\ImageSummaryNormalizer::class,
            
            \Vendor\Library\Generated\Model\AuthConfig::class => \Vendor\Library\Generated\Normalizer\AuthConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProcessConfig::class => \Vendor\Library\Generated\Normalizer\ProcessConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\Volume::class => \Vendor\Library\Generated\Normalizer\VolumeNormalizer::class,
            
            \Vendor\Library\Generated\Model\VolumeUsageData::class => \Vendor\Library\Generated\Normalizer\VolumeUsageDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\VolumeCreateOptions::class => \Vendor\Library\Generated\Normalizer\VolumeCreateOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\VolumeListResponse::class => \Vendor\Library\Generated\Normalizer\VolumeListResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\Network::class => \Vendor\Library\Generated\Normalizer\NetworkNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConfigReference::class => \Vendor\Library\Generated\Normalizer\ConfigReferenceNormalizer::class,
            
            \Vendor\Library\Generated\Model\IPAM::class => \Vendor\Library\Generated\Normalizer\IPAMNormalizer::class,
            
            \Vendor\Library\Generated\Model\IPAMConfig::class => \Vendor\Library\Generated\Normalizer\IPAMConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkContainer::class => \Vendor\Library\Generated\Normalizer\NetworkContainerNormalizer::class,
            
            \Vendor\Library\Generated\Model\PeerInfo::class => \Vendor\Library\Generated\Normalizer\PeerInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkCreateResponse::class => \Vendor\Library\Generated\Normalizer\NetworkCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BuildInfo::class => \Vendor\Library\Generated\Normalizer\BuildInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\BuildCache::class => \Vendor\Library\Generated\Normalizer\BuildCacheNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageID::class => \Vendor\Library\Generated\Normalizer\ImageIDNormalizer::class,
            
            \Vendor\Library\Generated\Model\CreateImageInfo::class => \Vendor\Library\Generated\Normalizer\CreateImageInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\PushImageInfo::class => \Vendor\Library\Generated\Normalizer\PushImageInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\DeviceInfo::class => \Vendor\Library\Generated\Normalizer\DeviceInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\ErrorDetail::class => \Vendor\Library\Generated\Normalizer\ErrorDetailNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProgressDetail::class => \Vendor\Library\Generated\Normalizer\ProgressDetailNormalizer::class,
            
            \Vendor\Library\Generated\Model\ErrorResponse::class => \Vendor\Library\Generated\Normalizer\ErrorResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\IDResponse::class => \Vendor\Library\Generated\Normalizer\IDResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointSettings::class => \Vendor\Library\Generated\Normalizer\EndpointSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointIPAMConfig::class => \Vendor\Library\Generated\Normalizer\EndpointIPAMConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginMount::class => \Vendor\Library\Generated\Normalizer\PluginMountNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginDevice::class => \Vendor\Library\Generated\Normalizer\PluginDeviceNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginEnv::class => \Vendor\Library\Generated\Normalizer\PluginEnvNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginInterfaceType::class => \Vendor\Library\Generated\Normalizer\PluginInterfaceTypeNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginPrivilege::class => \Vendor\Library\Generated\Normalizer\PluginPrivilegeNormalizer::class,
            
            \Vendor\Library\Generated\Model\Plugin::class => \Vendor\Library\Generated\Normalizer\PluginNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginSettings::class => \Vendor\Library\Generated\Normalizer\PluginSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfig::class => \Vendor\Library\Generated\Normalizer\PluginConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigInterface::class => \Vendor\Library\Generated\Normalizer\PluginConfigInterfaceNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigUser::class => \Vendor\Library\Generated\Normalizer\PluginConfigUserNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigNetwork::class => \Vendor\Library\Generated\Normalizer\PluginConfigNetworkNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigLinux::class => \Vendor\Library\Generated\Normalizer\PluginConfigLinuxNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigArgs::class => \Vendor\Library\Generated\Normalizer\PluginConfigArgsNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginConfigRootfs::class => \Vendor\Library\Generated\Normalizer\PluginConfigRootfsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ObjectVersion::class => \Vendor\Library\Generated\Normalizer\ObjectVersionNormalizer::class,
            
            \Vendor\Library\Generated\Model\NodeSpec::class => \Vendor\Library\Generated\Normalizer\NodeSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\Node::class => \Vendor\Library\Generated\Normalizer\NodeNormalizer::class,
            
            \Vendor\Library\Generated\Model\NodeDescription::class => \Vendor\Library\Generated\Normalizer\NodeDescriptionNormalizer::class,
            
            \Vendor\Library\Generated\Model\Platform::class => \Vendor\Library\Generated\Normalizer\PlatformNormalizer::class,
            
            \Vendor\Library\Generated\Model\EngineDescription::class => \Vendor\Library\Generated\Normalizer\EngineDescriptionNormalizer::class,
            
            \Vendor\Library\Generated\Model\EngineDescriptionPluginsItem::class => \Vendor\Library\Generated\Normalizer\EngineDescriptionPluginsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TLSInfo::class => \Vendor\Library\Generated\Normalizer\TLSInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\NodeStatus::class => \Vendor\Library\Generated\Normalizer\NodeStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\ManagerStatus::class => \Vendor\Library\Generated\Normalizer\ManagerStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpec::class => \Vendor\Library\Generated\Normalizer\SwarmSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecOrchestration::class => \Vendor\Library\Generated\Normalizer\SwarmSpecOrchestrationNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecRaft::class => \Vendor\Library\Generated\Normalizer\SwarmSpecRaftNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecDispatcher::class => \Vendor\Library\Generated\Normalizer\SwarmSpecDispatcherNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class => \Vendor\Library\Generated\Normalizer\SwarmSpecCAConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => \Vendor\Library\Generated\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecEncryptionConfig::class => \Vendor\Library\Generated\Normalizer\SwarmSpecEncryptionConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecTaskDefaults::class => \Vendor\Library\Generated\Normalizer\SwarmSpecTaskDefaultsNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class => \Vendor\Library\Generated\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterInfo::class => \Vendor\Library\Generated\Normalizer\ClusterInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\JoinTokens::class => \Vendor\Library\Generated\Normalizer\JoinTokensNormalizer::class,
            
            \Vendor\Library\Generated\Model\Swarm::class => \Vendor\Library\Generated\Normalizer\SwarmNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecPluginSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesSeccompNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecPrivilegesAppArmorNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecContainerSpecUlimitsItem::class => \Vendor\Library\Generated\Normalizer\TaskSpecContainerSpecUlimitsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class => \Vendor\Library\Generated\Normalizer\TaskSpecNetworkAttachmentSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecResources::class => \Vendor\Library\Generated\Normalizer\TaskSpecResourcesNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecRestartPolicy::class => \Vendor\Library\Generated\Normalizer\TaskSpecRestartPolicyNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecPlacement::class => \Vendor\Library\Generated\Normalizer\TaskSpecPlacementNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class => \Vendor\Library\Generated\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class => \Vendor\Library\Generated\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskSpecLogDriver::class => \Vendor\Library\Generated\Normalizer\TaskSpecLogDriverNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerStatus::class => \Vendor\Library\Generated\Normalizer\ContainerStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\PortStatus::class => \Vendor\Library\Generated\Normalizer\PortStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\TaskStatus::class => \Vendor\Library\Generated\Normalizer\TaskStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\Task::class => \Vendor\Library\Generated\Normalizer\TaskNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpec::class => \Vendor\Library\Generated\Normalizer\ServiceSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecMode::class => \Vendor\Library\Generated\Normalizer\ServiceSpecModeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecModeReplicated::class => \Vendor\Library\Generated\Normalizer\ServiceSpecModeReplicatedNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecModeReplicatedJob::class => \Vendor\Library\Generated\Normalizer\ServiceSpecModeReplicatedJobNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecUpdateConfig::class => \Vendor\Library\Generated\Normalizer\ServiceSpecUpdateConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceSpecRollbackConfig::class => \Vendor\Library\Generated\Normalizer\ServiceSpecRollbackConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointPortConfig::class => \Vendor\Library\Generated\Normalizer\EndpointPortConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointSpec::class => \Vendor\Library\Generated\Normalizer\EndpointSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\Service::class => \Vendor\Library\Generated\Normalizer\ServiceNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceEndpoint::class => \Vendor\Library\Generated\Normalizer\ServiceEndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class => \Vendor\Library\Generated\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceUpdateStatus::class => \Vendor\Library\Generated\Normalizer\ServiceUpdateStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceServiceStatus::class => \Vendor\Library\Generated\Normalizer\ServiceServiceStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceJobStatus::class => \Vendor\Library\Generated\Normalizer\ServiceJobStatusNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageDeleteResponseItem::class => \Vendor\Library\Generated\Normalizer\ImageDeleteResponseItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceCreateResponse::class => \Vendor\Library\Generated\Normalizer\ServiceCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServiceUpdateResponse::class => \Vendor\Library\Generated\Normalizer\ServiceUpdateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerInspectResponse::class => \Vendor\Library\Generated\Normalizer\ContainerInspectResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerSummary::class => \Vendor\Library\Generated\Normalizer\ContainerSummaryNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerSummaryHostConfig::class => \Vendor\Library\Generated\Normalizer\ContainerSummaryHostConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerSummaryNetworkSettings::class => \Vendor\Library\Generated\Normalizer\ContainerSummaryNetworkSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\Driver::class => \Vendor\Library\Generated\Normalizer\DriverNormalizer::class,
            
            \Vendor\Library\Generated\Model\SecretSpec::class => \Vendor\Library\Generated\Normalizer\SecretSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\Secret::class => \Vendor\Library\Generated\Normalizer\SecretNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConfigSpec::class => \Vendor\Library\Generated\Normalizer\ConfigSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\Config::class => \Vendor\Library\Generated\Normalizer\ConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerState::class => \Vendor\Library\Generated\Normalizer\ContainerStateNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerCreateResponse::class => \Vendor\Library\Generated\Normalizer\ContainerCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerUpdateResponse::class => \Vendor\Library\Generated\Normalizer\ContainerUpdateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerStatsResponse::class => \Vendor\Library\Generated\Normalizer\ContainerStatsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerBlkioStats::class => \Vendor\Library\Generated\Normalizer\ContainerBlkioStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class => \Vendor\Library\Generated\Normalizer\ContainerBlkioStatEntryNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerCPUStats::class => \Vendor\Library\Generated\Normalizer\ContainerCPUStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerCPUUsage::class => \Vendor\Library\Generated\Normalizer\ContainerCPUUsageNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerPidsStats::class => \Vendor\Library\Generated\Normalizer\ContainerPidsStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerThrottlingData::class => \Vendor\Library\Generated\Normalizer\ContainerThrottlingDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerMemoryStats::class => \Vendor\Library\Generated\Normalizer\ContainerMemoryStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerNetworkStats::class => \Vendor\Library\Generated\Normalizer\ContainerNetworkStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerStorageStats::class => \Vendor\Library\Generated\Normalizer\ContainerStorageStatsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerTopResponse::class => \Vendor\Library\Generated\Normalizer\ContainerTopResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerWaitResponse::class => \Vendor\Library\Generated\Normalizer\ContainerWaitResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerWaitExitError::class => \Vendor\Library\Generated\Normalizer\ContainerWaitExitErrorNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemVersion::class => \Vendor\Library\Generated\Normalizer\SystemVersionNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemVersionPlatform::class => \Vendor\Library\Generated\Normalizer\SystemVersionPlatformNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemVersionComponentsItem::class => \Vendor\Library\Generated\Normalizer\SystemVersionComponentsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemInfo::class => \Vendor\Library\Generated\Normalizer\SystemInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => \Vendor\Library\Generated\Normalizer\SystemInfoDefaultAddressPoolsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerdInfo::class => \Vendor\Library\Generated\Normalizer\ContainerdInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainerdInfoNamespaces::class => \Vendor\Library\Generated\Normalizer\ContainerdInfoNamespacesNormalizer::class,
            
            \Vendor\Library\Generated\Model\FirewallInfo::class => \Vendor\Library\Generated\Normalizer\FirewallInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\PluginsInfo::class => \Vendor\Library\Generated\Normalizer\PluginsInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\RegistryServiceConfig::class => \Vendor\Library\Generated\Normalizer\RegistryServiceConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\IndexInfo::class => \Vendor\Library\Generated\Normalizer\IndexInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\Runtime::class => \Vendor\Library\Generated\Normalizer\RuntimeNormalizer::class,
            
            \Vendor\Library\Generated\Model\Commit::class => \Vendor\Library\Generated\Normalizer\CommitNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmInfo::class => \Vendor\Library\Generated\Normalizer\SwarmInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\PeerNode::class => \Vendor\Library\Generated\Normalizer\PeerNodeNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworkAttachmentConfig::class => \Vendor\Library\Generated\Normalizer\NetworkAttachmentConfigNormalizer::class,
            
            \Vendor\Library\Generated\Model\EventActor::class => \Vendor\Library\Generated\Normalizer\EventActorNormalizer::class,
            
            \Vendor\Library\Generated\Model\EventMessage::class => \Vendor\Library\Generated\Normalizer\EventMessageNormalizer::class,
            
            \Vendor\Library\Generated\Model\OCIDescriptor::class => \Vendor\Library\Generated\Normalizer\OCIDescriptorNormalizer::class,
            
            \Vendor\Library\Generated\Model\OCIPlatform::class => \Vendor\Library\Generated\Normalizer\OCIPlatformNormalizer::class,
            
            \Vendor\Library\Generated\Model\DistributionInspect::class => \Vendor\Library\Generated\Normalizer\DistributionInspectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolume::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeInfo::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumePublishStatusItem::class => \Vendor\Library\Generated\Normalizer\ClusterVolumePublishStatusItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpec::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessMode::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecAccessModeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecAccessModeSecretsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => \Vendor\Library\Generated\Normalizer\ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummary::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummaryNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummarySize::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummarySizeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummaryImageData::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummaryImageDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummaryImageDataSize::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummaryImageDataSizeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImageManifestSummaryAttestationData::class => \Vendor\Library\Generated\Normalizer\ImageManifestSummaryAttestationDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainersCreatePostBody::class => \Vendor\Library\Generated\Normalizer\ContainersCreatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainersIdUpdatePostBody::class => \Vendor\Library\Generated\Normalizer\ContainersIdUpdatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ContainersPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\ContainersPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\BuildPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\BuildPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ImagesNameHistoryGetResponse200Item::class => \Vendor\Library\Generated\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImagesSearchGetResponse200Item::class => \Vendor\Library\Generated\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ImagesPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\ImagesPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\AuthPostResponse200::class => \Vendor\Library\Generated\Normalizer\AuthPostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\SystemDfGetResponse200::class => \Vendor\Library\Generated\Normalizer\SystemDfGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ContainersIdExecPostBody::class => \Vendor\Library\Generated\Normalizer\ContainersIdExecPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ExecIdStartPostBody::class => \Vendor\Library\Generated\Normalizer\ExecIdStartPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class => \Vendor\Library\Generated\Normalizer\ExecIdJsonGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\VolumesNamePutBody::class => \Vendor\Library\Generated\Normalizer\VolumesNamePutBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\VolumesPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\VolumesPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\NetworksCreatePostBody::class => \Vendor\Library\Generated\Normalizer\NetworksCreatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworksIdConnectPostBody::class => \Vendor\Library\Generated\Normalizer\NetworksIdConnectPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworksIdDisconnectPostBody::class => \Vendor\Library\Generated\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\NetworksPrunePostResponse200::class => \Vendor\Library\Generated\Normalizer\NetworksPrunePostResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmInitPostBody::class => \Vendor\Library\Generated\Normalizer\SwarmInitPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmJoinPostBody::class => \Vendor\Library\Generated\Normalizer\SwarmJoinPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmUnlockkeyGetResponse200::class => \Vendor\Library\Generated\Normalizer\SwarmUnlockkeyGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\SwarmUnlockPostBody::class => \Vendor\Library\Generated\Normalizer\SwarmUnlockPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServicesCreatePostBody::class => \Vendor\Library\Generated\Normalizer\ServicesCreatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class => \Vendor\Library\Generated\Normalizer\ServicesIdUpdatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\SecretsCreatePostBody::class => \Vendor\Library\Generated\Normalizer\SecretsCreatePostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConfigsCreatePostBody::class => \Vendor\Library\Generated\Normalizer\ConfigsCreatePostBodyNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Vendor\Library\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Vendor\Library\Generated\Model\Port::class => false,
                \Vendor\Library\Generated\Model\MountPoint::class => false,
                \Vendor\Library\Generated\Model\DeviceMapping::class => false,
                \Vendor\Library\Generated\Model\DeviceRequest::class => false,
                \Vendor\Library\Generated\Model\ThrottleDevice::class => false,
                \Vendor\Library\Generated\Model\Mount::class => false,
                \Vendor\Library\Generated\Model\MountBindOptions::class => false,
                \Vendor\Library\Generated\Model\MountVolumeOptions::class => false,
                \Vendor\Library\Generated\Model\MountVolumeOptionsDriverConfig::class => false,
                \Vendor\Library\Generated\Model\MountImageOptions::class => false,
                \Vendor\Library\Generated\Model\MountTmpfsOptions::class => false,
                \Vendor\Library\Generated\Model\RestartPolicy::class => false,
                \Vendor\Library\Generated\Model\Resources::class => false,
                \Vendor\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class => false,
                \Vendor\Library\Generated\Model\ResourcesUlimitsItem::class => false,
                \Vendor\Library\Generated\Model\Limit::class => false,
                \Vendor\Library\Generated\Model\ResourceObject::class => false,
                \Vendor\Library\Generated\Model\GenericResourcesItem::class => false,
                \Vendor\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class => false,
                \Vendor\Library\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class => false,
                \Vendor\Library\Generated\Model\HealthConfig::class => false,
                \Vendor\Library\Generated\Model\Health::class => false,
                \Vendor\Library\Generated\Model\HealthcheckResult::class => false,
                \Vendor\Library\Generated\Model\HostConfig::class => false,
                \Vendor\Library\Generated\Model\HostConfigLogConfig::class => false,
                \Vendor\Library\Generated\Model\ContainerConfig::class => false,
                \Vendor\Library\Generated\Model\ImageConfig::class => false,
                \Vendor\Library\Generated\Model\NetworkingConfig::class => false,
                \Vendor\Library\Generated\Model\NetworkSettings::class => false,
                \Vendor\Library\Generated\Model\Address::class => false,
                \Vendor\Library\Generated\Model\PortBinding::class => false,
                \Vendor\Library\Generated\Model\DriverData::class => false,
                \Vendor\Library\Generated\Model\FilesystemChange::class => false,
                \Vendor\Library\Generated\Model\ImageInspect::class => false,
                \Vendor\Library\Generated\Model\ImageInspectRootFS::class => false,
                \Vendor\Library\Generated\Model\ImageInspectMetadata::class => false,
                \Vendor\Library\Generated\Model\ImageSummary::class => false,
                \Vendor\Library\Generated\Model\AuthConfig::class => false,
                \Vendor\Library\Generated\Model\ProcessConfig::class => false,
                \Vendor\Library\Generated\Model\Volume::class => false,
                \Vendor\Library\Generated\Model\VolumeUsageData::class => false,
                \Vendor\Library\Generated\Model\VolumeCreateOptions::class => false,
                \Vendor\Library\Generated\Model\VolumeListResponse::class => false,
                \Vendor\Library\Generated\Model\Network::class => false,
                \Vendor\Library\Generated\Model\ConfigReference::class => false,
                \Vendor\Library\Generated\Model\IPAM::class => false,
                \Vendor\Library\Generated\Model\IPAMConfig::class => false,
                \Vendor\Library\Generated\Model\NetworkContainer::class => false,
                \Vendor\Library\Generated\Model\PeerInfo::class => false,
                \Vendor\Library\Generated\Model\NetworkCreateResponse::class => false,
                \Vendor\Library\Generated\Model\BuildInfo::class => false,
                \Vendor\Library\Generated\Model\BuildCache::class => false,
                \Vendor\Library\Generated\Model\ImageID::class => false,
                \Vendor\Library\Generated\Model\CreateImageInfo::class => false,
                \Vendor\Library\Generated\Model\PushImageInfo::class => false,
                \Vendor\Library\Generated\Model\DeviceInfo::class => false,
                \Vendor\Library\Generated\Model\ErrorDetail::class => false,
                \Vendor\Library\Generated\Model\ProgressDetail::class => false,
                \Vendor\Library\Generated\Model\ErrorResponse::class => false,
                \Vendor\Library\Generated\Model\IDResponse::class => false,
                \Vendor\Library\Generated\Model\EndpointSettings::class => false,
                \Vendor\Library\Generated\Model\EndpointIPAMConfig::class => false,
                \Vendor\Library\Generated\Model\PluginMount::class => false,
                \Vendor\Library\Generated\Model\PluginDevice::class => false,
                \Vendor\Library\Generated\Model\PluginEnv::class => false,
                \Vendor\Library\Generated\Model\PluginInterfaceType::class => false,
                \Vendor\Library\Generated\Model\PluginPrivilege::class => false,
                \Vendor\Library\Generated\Model\Plugin::class => false,
                \Vendor\Library\Generated\Model\PluginSettings::class => false,
                \Vendor\Library\Generated\Model\PluginConfig::class => false,
                \Vendor\Library\Generated\Model\PluginConfigInterface::class => false,
                \Vendor\Library\Generated\Model\PluginConfigUser::class => false,
                \Vendor\Library\Generated\Model\PluginConfigNetwork::class => false,
                \Vendor\Library\Generated\Model\PluginConfigLinux::class => false,
                \Vendor\Library\Generated\Model\PluginConfigArgs::class => false,
                \Vendor\Library\Generated\Model\PluginConfigRootfs::class => false,
                \Vendor\Library\Generated\Model\ObjectVersion::class => false,
                \Vendor\Library\Generated\Model\NodeSpec::class => false,
                \Vendor\Library\Generated\Model\Node::class => false,
                \Vendor\Library\Generated\Model\NodeDescription::class => false,
                \Vendor\Library\Generated\Model\Platform::class => false,
                \Vendor\Library\Generated\Model\EngineDescription::class => false,
                \Vendor\Library\Generated\Model\EngineDescriptionPluginsItem::class => false,
                \Vendor\Library\Generated\Model\TLSInfo::class => false,
                \Vendor\Library\Generated\Model\NodeStatus::class => false,
                \Vendor\Library\Generated\Model\ManagerStatus::class => false,
                \Vendor\Library\Generated\Model\SwarmSpec::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecOrchestration::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecRaft::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecDispatcher::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecEncryptionConfig::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecTaskDefaults::class => false,
                \Vendor\Library\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class => false,
                \Vendor\Library\Generated\Model\ClusterInfo::class => false,
                \Vendor\Library\Generated\Model\JoinTokens::class => false,
                \Vendor\Library\Generated\Model\Swarm::class => false,
                \Vendor\Library\Generated\Model\TaskSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class => false,
                \Vendor\Library\Generated\Model\TaskSpecContainerSpecUlimitsItem::class => false,
                \Vendor\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class => false,
                \Vendor\Library\Generated\Model\TaskSpecResources::class => false,
                \Vendor\Library\Generated\Model\TaskSpecRestartPolicy::class => false,
                \Vendor\Library\Generated\Model\TaskSpecPlacement::class => false,
                \Vendor\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class => false,
                \Vendor\Library\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class => false,
                \Vendor\Library\Generated\Model\TaskSpecLogDriver::class => false,
                \Vendor\Library\Generated\Model\ContainerStatus::class => false,
                \Vendor\Library\Generated\Model\PortStatus::class => false,
                \Vendor\Library\Generated\Model\TaskStatus::class => false,
                \Vendor\Library\Generated\Model\Task::class => false,
                \Vendor\Library\Generated\Model\ServiceSpec::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecMode::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecModeReplicated::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecModeReplicatedJob::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecUpdateConfig::class => false,
                \Vendor\Library\Generated\Model\ServiceSpecRollbackConfig::class => false,
                \Vendor\Library\Generated\Model\EndpointPortConfig::class => false,
                \Vendor\Library\Generated\Model\EndpointSpec::class => false,
                \Vendor\Library\Generated\Model\Service::class => false,
                \Vendor\Library\Generated\Model\ServiceEndpoint::class => false,
                \Vendor\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class => false,
                \Vendor\Library\Generated\Model\ServiceUpdateStatus::class => false,
                \Vendor\Library\Generated\Model\ServiceServiceStatus::class => false,
                \Vendor\Library\Generated\Model\ServiceJobStatus::class => false,
                \Vendor\Library\Generated\Model\ImageDeleteResponseItem::class => false,
                \Vendor\Library\Generated\Model\ServiceCreateResponse::class => false,
                \Vendor\Library\Generated\Model\ServiceUpdateResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerInspectResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerSummary::class => false,
                \Vendor\Library\Generated\Model\ContainerSummaryHostConfig::class => false,
                \Vendor\Library\Generated\Model\ContainerSummaryNetworkSettings::class => false,
                \Vendor\Library\Generated\Model\Driver::class => false,
                \Vendor\Library\Generated\Model\SecretSpec::class => false,
                \Vendor\Library\Generated\Model\Secret::class => false,
                \Vendor\Library\Generated\Model\ConfigSpec::class => false,
                \Vendor\Library\Generated\Model\Config::class => false,
                \Vendor\Library\Generated\Model\ContainerState::class => false,
                \Vendor\Library\Generated\Model\ContainerCreateResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerUpdateResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerStatsResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerBlkioStats::class => false,
                \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class => false,
                \Vendor\Library\Generated\Model\ContainerCPUStats::class => false,
                \Vendor\Library\Generated\Model\ContainerCPUUsage::class => false,
                \Vendor\Library\Generated\Model\ContainerPidsStats::class => false,
                \Vendor\Library\Generated\Model\ContainerThrottlingData::class => false,
                \Vendor\Library\Generated\Model\ContainerMemoryStats::class => false,
                \Vendor\Library\Generated\Model\ContainerNetworkStats::class => false,
                \Vendor\Library\Generated\Model\ContainerStorageStats::class => false,
                \Vendor\Library\Generated\Model\ContainerTopResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerWaitResponse::class => false,
                \Vendor\Library\Generated\Model\ContainerWaitExitError::class => false,
                \Vendor\Library\Generated\Model\SystemVersion::class => false,
                \Vendor\Library\Generated\Model\SystemVersionPlatform::class => false,
                \Vendor\Library\Generated\Model\SystemVersionComponentsItem::class => false,
                \Vendor\Library\Generated\Model\SystemInfo::class => false,
                \Vendor\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => false,
                \Vendor\Library\Generated\Model\ContainerdInfo::class => false,
                \Vendor\Library\Generated\Model\ContainerdInfoNamespaces::class => false,
                \Vendor\Library\Generated\Model\FirewallInfo::class => false,
                \Vendor\Library\Generated\Model\PluginsInfo::class => false,
                \Vendor\Library\Generated\Model\RegistryServiceConfig::class => false,
                \Vendor\Library\Generated\Model\IndexInfo::class => false,
                \Vendor\Library\Generated\Model\Runtime::class => false,
                \Vendor\Library\Generated\Model\Commit::class => false,
                \Vendor\Library\Generated\Model\SwarmInfo::class => false,
                \Vendor\Library\Generated\Model\PeerNode::class => false,
                \Vendor\Library\Generated\Model\NetworkAttachmentConfig::class => false,
                \Vendor\Library\Generated\Model\EventActor::class => false,
                \Vendor\Library\Generated\Model\EventMessage::class => false,
                \Vendor\Library\Generated\Model\OCIDescriptor::class => false,
                \Vendor\Library\Generated\Model\OCIPlatform::class => false,
                \Vendor\Library\Generated\Model\DistributionInspect::class => false,
                \Vendor\Library\Generated\Model\ClusterVolume::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeInfo::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumePublishStatusItem::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpec::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessMode::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => false,
                \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummary::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummarySize::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummaryImageData::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummaryImageDataSize::class => false,
                \Vendor\Library\Generated\Model\ImageManifestSummaryAttestationData::class => false,
                \Vendor\Library\Generated\Model\ContainersCreatePostBody::class => false,
                \Vendor\Library\Generated\Model\ContainersIdUpdatePostBody::class => false,
                \Vendor\Library\Generated\Model\ContainersPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\BuildPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\ImagesNameHistoryGetResponse200Item::class => false,
                \Vendor\Library\Generated\Model\ImagesSearchGetResponse200Item::class => false,
                \Vendor\Library\Generated\Model\ImagesPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\AuthPostResponse200::class => false,
                \Vendor\Library\Generated\Model\SystemDfGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ContainersIdExecPostBody::class => false,
                \Vendor\Library\Generated\Model\ExecIdStartPostBody::class => false,
                \Vendor\Library\Generated\Model\ExecIdJsonGetResponse200::class => false,
                \Vendor\Library\Generated\Model\VolumesNamePutBody::class => false,
                \Vendor\Library\Generated\Model\VolumesPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\NetworksCreatePostBody::class => false,
                \Vendor\Library\Generated\Model\NetworksIdConnectPostBody::class => false,
                \Vendor\Library\Generated\Model\NetworksIdDisconnectPostBody::class => false,
                \Vendor\Library\Generated\Model\NetworksPrunePostResponse200::class => false,
                \Vendor\Library\Generated\Model\SwarmInitPostBody::class => false,
                \Vendor\Library\Generated\Model\SwarmJoinPostBody::class => false,
                \Vendor\Library\Generated\Model\SwarmUnlockkeyGetResponse200::class => false,
                \Vendor\Library\Generated\Model\SwarmUnlockPostBody::class => false,
                \Vendor\Library\Generated\Model\ServicesCreatePostBody::class => false,
                \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class => false,
                \Vendor\Library\Generated\Model\SecretsCreatePostBody::class => false,
                \Vendor\Library\Generated\Model\ConfigsCreatePostBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}