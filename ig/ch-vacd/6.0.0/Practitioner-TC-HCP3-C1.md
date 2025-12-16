# TC HCP3 C1 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC HCP3 C1**

## Example Practitioner: TC HCP3 C1

Profile: [CH Core Practitioner EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner-epr.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601077777777

**active**: true

**name**: Macht Gesund 

**telecom**: ph: tel:+41.11.222.55.66(Work), [mailto:macht.gesund@gruppenpraxis.ch](mailto:mailto:macht.gesund@gruppenpraxis.ch), [http://www.gruppenpraxis.ch](http://www.gruppenpraxis.ch)

**address**: Doktorgasse 2 Musterhausen 8888 CH 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "TC-HCP3-C1",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601077777777"
    }
  ],
  "active" : true,
  "name" : [
    {
      "family" : "Gesund",
      "given" : ["Macht"],
      "prefix" : ["Dr. med."]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "tel:+41.11.222.55.66",
      "use" : "work"
    },
    {
      "system" : "email",
      "value" : "mailto:macht.gesund@gruppenpraxis.ch",
      "use" : "work"
    },
    {
      "system" : "url",
      "value" : "http://www.gruppenpraxis.ch",
      "use" : "work"
    }
  ],
  "address" : [
    {
      "type" : "physical",
      "line" : ["Doktorgasse 2"],
      "city" : "Musterhausen",
      "postalCode" : "8888",
      "country" : "CH"
    }
  ]
}

```
