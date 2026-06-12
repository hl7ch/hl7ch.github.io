# UC1-Device-Pacemaker - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-Device-Pacemaker**

## Example Device: UC1-Device-Pacemaker

Profile: [CH Emergency Record Device](StructureDefinition-ch-emr-device.md)

### UdiCarriers

| | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- |
| - | **DeviceIdentifier** | **Issuer** | **Jurisdiction** | **CarrierHRF** | **EntryType** |
| * | 00845678901234 | [http://hl7.org/fhir/NamingSystem/gs1-di](http://hl7.org/fhir/NamingSystem/gs1-di) | [http://hl7.org/fhir/NamingSystem/eu-ec-udi](http://hl7.org/fhir/NamingSystem/eu-ec-udi) | (01)00845678901234(17)301231(10)PM2015A(21)MM2015PM001 | Manual |

**status**: Active

**type**: Cardiac pacemaker

**patient**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**safety**: MR Conditional



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "UC1-Device-Pacemaker",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"]
  },
  "udiCarrier" : [{
    "deviceIdentifier" : "00845678901234",
    "issuer" : "http://hl7.org/fhir/NamingSystem/gs1-di",
    "jurisdiction" : "http://hl7.org/fhir/NamingSystem/eu-ec-udi",
    "carrierHRF" : "(01)00845678901234(17)301231(10)PM2015A(21)MM2015PM001",
    "entryType" : "manual"
  }],
  "status" : "active",
  "type" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "14106009"
    }]
  },
  "patient" : {
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "safety" : [{
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-emr/CodeSystem/ch-emr-mri-safety-status-cs",
      "code" : "mr-conditional",
      "display" : "MR Conditional"
    }]
  }]
}

```
