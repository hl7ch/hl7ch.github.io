# UC3-RelatedPerson-Mutter - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC3-RelatedPerson-Mutter**

## Example RelatedPerson: UC3-RelatedPerson-Mutter

Profile: [CH Emergency Record RelatedPerson](StructureDefinition-ch-emr-relatedperson.md)

**active**: true

**patient**: [Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)](Patient-UC3-Patient-LaraKeller.md)

**relationship**: mother

**name**: Margrit Keller (Official)

**telecom**: [+41 79 555 11 22](tel:+41795551122)

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
  "id" : "UC3-RelatedPerson-Mutter",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
  },
  "active" : true,
  "patient" : {
    "reference" : "Patient/UC3-Patient-LaraKeller"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "MTH",
      "display" : "mother"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Keller",
    "given" : ["Margrit"]
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 79 555 11 22",
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
