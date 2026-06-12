# UC1-RelatedPerson-VreniMuster - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-RelatedPerson-VreniMuster**

## Example RelatedPerson: UC1-RelatedPerson-VreniMuster

Profile: [CH Emergency Record RelatedPerson](StructureDefinition-ch-emr-relatedperson.md)

**active**: true

**patient**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**relationship**: wife

**name**: Vreni Muster (Official)

**telecom**: [+41 78 876 54 32](tel:+41788765432)

**gender**: Female

### Communications

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Preferred** |
| * | German | true |



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "UC1-RelatedPerson-VreniMuster",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
  },
  "active" : true,
  "patient" : {
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "WIFE",
      "display" : "wife"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Muster",
    "given" : ["Vreni"]
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 78 876 54 32",
    "use" : "mobile",
    "rank" : 1
  }],
  "gender" : "female",
  "communication" : [{
    "language" : {
      "coding" : [{
        "system" : "urn:ietf:bcp:47",
        "code" : "de"
      }]
    },
    "preferred" : true
  }]
}

```
