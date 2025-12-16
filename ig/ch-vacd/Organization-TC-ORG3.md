# TC Labor Organization - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC Labor Organization**

## Organization: TC Labor Organization

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601999999981

**name**: Labor Wir Messen Alles

**telecom**: ph: tel:+41.56.299.55.22(Work), [mailto:resultate@labor-messenalles.ch](mailto:mailto:resultate@labor-messenalles.ch), [http://www.labor-messenalles.ch](http://www.labor-messenalles.ch)

**address**: Messweg 1 Wissen ZG 6310 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "TC-ORG3",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601999999981"
    }
  ],
  "name" : "Labor Wir Messen Alles",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "tel:+41.56.299.55.22",
      "use" : "work"
    },
    {
      "system" : "email",
      "value" : "mailto:resultate@labor-messenalles.ch",
      "use" : "work"
    },
    {
      "system" : "url",
      "value" : "http://www.labor-messenalles.ch",
      "use" : "work"
    }
  ],
  "address" : [
    {
      "line" : ["Messweg 1"],
      "city" : "Wissen",
      "state" : "ZG",
      "postalCode" : "6310",
      "country" : "CH"
    }
  ]
}

```
