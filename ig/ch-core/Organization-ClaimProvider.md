# Klinik für Psychiatrie - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Klinik für Psychiatrie**

## Example Organization: Klinik für Psychiatrie

Profile: [CH Core Organization](StructureDefinition-ch-core-organization.md)

**identifier**: `urn:oid:2.16.756.5.30.1.123.100.2.1.1`/Y604801, [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438

**name**: Klinik für Psychiatrie

**telecom**: ph: 061 956 99 00

**address**: Spitalgasse 17b5 Basel BS 4000 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "ClaimProvider",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
      "value" : "Y604801"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000234438"
    }
  ],
  "name" : "Klinik für Psychiatrie",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "061 956 99 00"
    }
  ],
  "address" : [
    {
      "line" : ["Spitalgasse 17b5"],
      "city" : "Basel",
      "state" : "BS",
      "postalCode" : "4000"
    }
  ]
}

```
